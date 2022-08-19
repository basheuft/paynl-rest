<?php

namespace PaynlRest\Request\Payout;

use PaynlRest\Http\Method;
use PaynlRest\Request\ServiceIdAwareRequest;
use PaynlRest\Request\RequestInterface;
use PaynlRest\Response\Payout\CreateResponse;

class CreateRequest extends ServiceIdAwareRequest implements RequestInterface
{

    private string $iban;
    private string $holder;

    public function __construct(string $iban, string $holder)
    {
        $this->iban = $iban;
        $this->holder = $holder;
    }

    public function getMethod(): string
    {
        return Method::POST;
    }

    public function getUrlPath(): string
    {
        return "payout";
    }

    /**
     * @throws \PaynlRest\Exception\ServiceIdNotSetException
     */
    public function getBody(): ?string
    {
        return json_encode([
            'transaction' => [
                'type' => 'MIT',
                'serviceId' => $this->getServiceId(),
                'amount' => [
                    'value' => 10
                ],
            ],
            'payment' => [
                'method' => 'iban',
                'iban' => [
                    'number' => $this->iban,
                    'holder' => $this->holder
                ]
            ],
            'customer' => [],
            'stats' => []
        ]);
    }

    public function getResponseClass(): string
    {
        return CreateResponse::class;
    }
}