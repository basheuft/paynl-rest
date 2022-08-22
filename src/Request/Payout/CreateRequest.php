<?php

namespace PaynlRest\Request\Payout;

use PaynlRest\Http\Method;
use PaynlRest\Model\Customer\CustomerInterface;
use PaynlRest\Model\Payment\PaymentInterface;
use PaynlRest\Model\ServiceIdAwareInterface;
use PaynlRest\Model\Stats\StatsInterface;
use PaynlRest\Request\RequestInterface;
use PaynlRest\Response\Payout\CreateResponse;

class CreateRequest implements RequestInterface, ServiceIdAwareInterface
{

    private Transaction $transaction;
    private PaymentInterface $payment;
    private CustomerInterface $customer;
    private StatsInterface $stats;

    public function __construct(Transaction $transaction, PaymentInterface $payment, CustomerInterface $customer, StatsInterface $stats)
    {
        $this->transaction = $transaction;
        $this->payment = $payment;
        $this->customer = $customer;
        $this->stats = $stats;
    }

    public function getMethod(): string
    {
        return Method::POST;
    }

    public function getUrlPath(): string
    {
        return "payout";
    }

    public function getData(): array
    {
        return [
            'transaction' => $this->transaction,
            'payment' => $this->payment,
            'customer' => $this->customer,
            'stats' => $this->stats
        ];
    }

    public function getResponseClass(): string
    {
        return CreateResponse::class;
    }

    public function setServiceId(string $serviceId): void
    {
        $this->transaction->setServiceId($serviceId);
    }
}