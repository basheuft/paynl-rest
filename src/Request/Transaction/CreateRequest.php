<?php

namespace PaynlRest\Request\Transaction;

use PaynlRest\Http\Method;
use PaynlRest\Request\RequestInterface;
use PaynlRest\Request\ServiceIdAwareRequest;
use PaynlRest\Response\Transaction\CreateResponse;

class CreateRequest extends ServiceIdAwareRequest implements RequestInterface
{

    private int $amount;
    private string $returnUrl;
    private ?string $description;
    private ?string $exchangeUrl;

    private string $currency = 'EUR';

    public function __construct(int $amount, string $returnUrl, ?string $description = null, ?string $exchangeUrl = null)
    {
        $this->amount = $amount;
        $this->returnUrl = $returnUrl;
        $this->description = $description;
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

    public function getBody(): ?string
    {
        return json_encode([
            'serviceId' => $this->getServiceId(),
            'amount' => [
                'value' => $this->amount,
                'currency' => $this->currency
            ],
            'returnUrl' => $this->returnUrl,
            'description' => $this->description,
            'exchangeUrl' => $this->exchangeUrl
        ]);
    }

    public function getResponseClass(): string
    {
        return CreateResponse::class;
    }
}