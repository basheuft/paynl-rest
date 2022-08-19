<?php

namespace PaynlRest\Request\Service;

use PaynlRest\Http\Method;
use PaynlRest\Request\RequestInterface;
use PaynlRest\Response\Service\GetConfigResponse;

class GetConfigRequest implements RequestInterface
{

    private string $serviceId;

    public function __construct(string $serviceId) {
        $this->serviceId = $serviceId;
    }

    public function getMethod(): string
    {
        return Method::GET;
    }

    public function getUrlPath(): string
    {
        return sprintf("services/%s/config", $this->serviceId);
    }

    public function getBody(): ?string
    {
        return null;
    }

    public function getResponseClass(): string
    {
        return GetConfigResponse::class;
    }

}