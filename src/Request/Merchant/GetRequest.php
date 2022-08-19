<?php

namespace PaynlRest\Request\Merchant;

use PaynlRest\Http\Method;
use PaynlRest\Request\RequestInterface;
use PaynlRest\Response\Merchant\GetResponse;

class GetRequest implements RequestInterface
{

    private string $merchantId;

    public function __construct(string $merchantId)
    {
        $this->merchantId = $merchantId;
    }

    public function getMethod(): string
    {
        return Method::GET;
    }

    public function getUrlPath(): string
    {
        return sprintf("merchants/%s", $this->merchantId);
    }

    public function getBody(): ?string
    {
        return null;
    }

    public function getResponseClass(): string
    {
        return GetResponse::class;
    }
}