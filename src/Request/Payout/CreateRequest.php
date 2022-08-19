<?php

namespace PaynlRest\Request\Payout;

use PaynlRest\Http\Method;
use PaynlRest\Model\Customer\CustomerInterface;
use PaynlRest\Model\Payment\PaymentInterface;
use PaynlRest\Model\Stats\StatsInterface;
use PaynlRest\Model\Transaction\TransactionInterface;
use PaynlRest\Request\ServiceIdAwareRequest;
use PaynlRest\Request\RequestInterface;
use PaynlRest\Response\Payout\CreateResponse;

class CreateRequest implements RequestInterface
{

    private TransactionInterface $transaction;
    private PaymentInterface $payment;
    private CustomerInterface $customer;
    private StatsInterface $stats;

    public function __construct(TransactionInterface $transaction, PaymentInterface $payment, CustomerInterface $customer, StatsInterface $stats)
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
}