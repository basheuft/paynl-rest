<?php

namespace PaynlRest;

use PaynlRest\Model\Amount;
use PaynlRest\Model\Customer\Customer;
use PaynlRest\Model\Customer\CustomerInterface;
use PaynlRest\Model\Payment\Payment;
use PaynlRest\Model\Payment\PaymentInterface;
use PaynlRest\Model\PayoutType;
use PaynlRest\Model\Stats\Stats;
use PaynlRest\Model\Stats\StatsInterface;
use PaynlRest\Request\Payout\CreateRequest;
use PaynlRest\Request\Payout\Transaction;
use PaynlRest\Request\RequestInterface;

class PayoutRequestFactory
{

    private Transaction $transaction;
    private PaymentInterface $payment;
    private CustomerInterface $customer;
    private StatsInterface $stats;

    public function __construct(PayoutType $type, string $ibanNumber, string $ibanName, ?string $ibanBic = null)
    {
        $this->transaction = (new Transaction())
            ->setType($type->value);
        $this->payment = Payment::create($ibanNumber, $ibanName, $ibanBic);
        $this->customer = new Customer();
        $this->stats = new Stats();
    }

    public function setAmount(int $amountInCents, string $currency = 'EUR'): self
    {
        $this->transaction->setAmount(new Amount($amountInCents, $currency));
        return $this;
    }

    public function setCustomerData(?string $firstName = null, ?string $lastName = null, ?string $birthDate = null): self
    {
        $this->customer->setFirstName($firstName);
        $this->customer->setLastName($lastName);

        if ($birthDate !== null && $this->validBirthDate($birthDate)) {
            $this->customer->setBirthDate($birthDate);
        }

        return $this;
    }

    public function setExchangeUrl(string $url): self
    {
        $this->transaction->setExchangeUrl($url);
        return $this;
    }

    private function validBirthDate(string $bd): bool
    {
        // Validate
        $split = explode('-', $bd);
        if (count($split) < 3) {
            return false;
        }

        if (strlen($split[0]) !== 4 || $split[1] > 12 || $split[2] > 31) {
            return false;
        }

        $date = (new \DateTime())->setDate($split[0], $split[1], $split[2]);
        if ($date->format('Y-m-d') !== $bd) {
            return false;
        }

        return true;
    }

    public function create(): RequestInterface
    {
        return new CreateRequest($this->transaction, $this->payment, $this->customer, $this->stats);
    }

}