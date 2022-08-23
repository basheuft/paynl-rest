<?php

namespace PaynlRest\Request\Transaction;

use PaynlRest\Http\Method;
use PaynlRest\Model\Amount;
use PaynlRest\Model\Customer\CustomerInterface;
use PaynlRest\Model\NotificationInterface;
use PaynlRest\Model\OrderInterface;
use PaynlRest\Model\PaymentMethodInterface;
use PaynlRest\Model\ServiceIdAwareInterface;
use PaynlRest\Model\Stats\StatsInterface;
use PaynlRest\Model\TransferDataInterface;
use PaynlRest\Request\RequestInterface;
use PaynlRest\Response\Transaction\CreateResponse;

class CreateRequest implements RequestInterface, ServiceIdAwareInterface
{

    private string $serviceId;
    private ?string $description;
    private ?string $reference;
    private ?int $expire;
    private string $returnUrl;
    private ?string $exchangeUrl;
    private bool $testMode;

    private Amount $amount;
    private ?PaymentMethodInterface $paymentMethod;
    private ?CustomerInterface $customer;
    private ?OrderInterface $order;
    private ?StatsInterface $stats;
    private ?NotificationInterface $notification;
    private ?TransferDataInterface $transferData;

    public function __construct(
        Amount $amount,
        string $returnUrl,
        ?PaymentMethodInterface $paymentMethod,
        ?CustomerInterface $customer,
        ?OrderInterface $order,
        ?StatsInterface $stats,
        ?NotificationInterface $notification,
        ?TransferDataInterface $transferData,
        ?string $description = null,
        ?string $reference = null,
        ?int $expire = null,
        ?string $exchangeUrl = null,
        ?bool $testMode = false
    )
    {
        $this->amount = $amount;
        $this->returnUrl = $returnUrl;
        $this->paymentMethod = $paymentMethod;
        $this->customer = $customer;
        $this->order = $order;
        $this->stats = $stats;
        $this->notification = $notification;
        $this->transferData = $transferData;
        $this->description = $description;
        $this->reference = $reference;
        $this->expire = $expire;
        $this->exchangeUrl = $exchangeUrl;
        $this->testMode = $testMode;
    }

    public function getMethod(): string
    {
        return Method::POST;
    }

    public function getUrlPath(): string
    {
        return "transactions";
    }

    public function getData(): array
    {
        $data = [
            'serviceId' => $this->serviceId,
            'returnUrl' => $this->returnUrl,
            'amount' => $this->amount
        ];

        if (!empty($this->description)) {
            $data['description'] = $this->description;
        }

        if (!empty($this->reference)) {
            $data['reference'] = $this->reference;
        }

        if ($this->expire !== null && $this->expire > 0) {
            $data['expire'] = $this->expire;
        }

        if (!empty($this->exchangeUrl)) {
            $data['exchangeUrl'] = $this->exchangeUrl;
        }

        if ($this->paymentMethod !== null) {
            $data['paymentMethod'] = $this->paymentMethod;
        }

        if ($this->customer !== null) {
            $data['customer'] = $this->customer;
        }

        if ($this->order !== null) {
            $data['order'] = $this->order;
        }

        if ($this->stats !== null) {
            $data['stats'] = $this->stats;
        }

        if ($this->notification !== null) {
            $data['notification'] = $this->notification;
        }

        if ($this->transferData !== null) {
            $data['transferData'] = $this->transferData;
        }

        if ($this->testMode !== false) {
            $data['integration'] = ['testMode' => true];
        }

        return $data;
    }

    public function getResponseClass(): string
    {
        return CreateResponse::class;
    }

    public function setServiceId(string $serviceId)
    {
        $this->serviceId = $serviceId;
    }
}