<?php

namespace PaynlRest\Request\Transaction;

use PaynlRest\Http\Method;
use PaynlRest\Model\Amount;
use PaynlRest\Model\ServiceIdAwareInterface;
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

    private Amount $amount;

    public function __construct(
        Amount $amount,
        string $returnUrl,
        ?string $description = null,
        ?string $reference = null,
        ?int $expire = null,
        ?string $exchangeUrl = null
    )
    {
        $this->amount = $amount;
        $this->returnUrl = $returnUrl;
        $this->description = $description;
        $this->reference = $reference;
        $this->expire = $expire;
        $this->exchangeUrl = $exchangeUrl;
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