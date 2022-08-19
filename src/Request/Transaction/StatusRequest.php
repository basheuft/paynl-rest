<?php

namespace PaynlRest\Request\Transaction;

use PaynlRest\Http\Method;
use PaynlRest\Request\RequestInterface;
use PaynlRest\Response\Transaction\StatusResponse;

class StatusRequest implements RequestInterface
{

    private string $transactionId;

    public function __construct(string $transactionId)
    {
        $this->transactionId = $transactionId;
    }

    public function getMethod(): string
    {
        return Method::GET;
    }

    public function getUrlPath(): string
    {
        return sprintf("transactions/%s/status", $this->transactionId);
    }

    public function getBody(): ?string
    {
        return null;
    }

    public function getResponseClass(): string
    {
        return StatusResponse::class;
    }
}