<?php

namespace PaynlRest;

use PaynlRest\Model\Amount;
use PaynlRest\Model\Customer\CustomerInterface;
use PaynlRest\Model\NotificationInterface;
use PaynlRest\Model\OrderInterface;
use PaynlRest\Model\PaymentMethodInterface;
use PaynlRest\Model\Stats\StatsInterface;
use PaynlRest\Model\TransferDataInterface;
use PaynlRest\Request\RequestInterface;
use PaynlRest\Request\Transaction\CreateRequest;

class TransactionRequestFactory
{

    private string $returnUrl;
    private Amount $amount;
    private ?PaymentMethodInterface $paymentMethod = null;
    private ?CustomerInterface $customer = null;
    private ?OrderInterface $order = null;
    private ?StatsInterface $stats = null;
    private ?NotificationInterface $notification = null;
    private ?TransferDataInterface $transferData = null;

    private ?string $description = null;
    private ?string $reference = null;
    private ?int $expire = null;
    private ?string $exchangeUrl = null;

    private bool $testMode = false;

    public function __construct(string $returnUrl, int $amountInCents, string $currency = 'EUR')
    {
        $this->returnUrl = $returnUrl;
        $this->amount = new Amount($amountInCents, $currency);
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function setExpire(int|\DateTime $expire): self
    {
        if ($expire instanceof \DateTimeInterface) {
            $this->expire = $expire->getTimestamp();
        } else {
            $this->expire = $expire;
        }

        return $this;
    }

    public function setExchangeUrl(string $exchangeUrl): self
    {
        $this->exchangeUrl = $exchangeUrl;
        return $this;
    }

    public function setPaymentMethod(PaymentMethodInterface $method): self
    {
        $this->paymentMethod = $method;
        return $this;
    }

    public function setCustomer(CustomerInterface $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    public function setOrder(OrderInterface $order): self
    {
        $this->order = $order;
        return $this;
    }

    public function setStats(StatsInterface $stats): self
    {
        $this->stats = $stats;
        return $this;
    }

    public function setNotification(NotificationInterface $notification): self
    {
        $this->notification = $notification;
        return $this;
    }

    public function setTransferData(TransferDataInterface $transferData): self
    {
        $this->transferData = $transferData;
        return $this;
    }

    public function setTestMode(bool $t): self
    {
        $this->testMode = $t;
        return $this;
    }

    public function create(): RequestInterface
    {
        return new CreateRequest(
            $this->amount,
            $this->returnUrl,
            $this->paymentMethod,
            $this->customer,
            $this->order,
            $this->stats,
            $this->notification,
            $this->transferData,
            $this->description,
            $this->reference,
            $this->expire,
            $this->exchangeUrl,
            $this->testMode
        );
    }

}