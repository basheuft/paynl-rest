<?php

namespace Tests;

use PaynlRest\Request\RequestInterface;

class DummyRequest implements RequestInterface
{

    private string $method;
    private string $urlPath;
    private array $data;
    private string $respClass;

    public function __construct(string $method, string $urlPath, array $data, string $respClass)
    {
        $this->method = $method;
        $this->urlPath = $urlPath;
        $this->data = $data;
        $this->respClass = $respClass;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUrlPath(): string
    {
        return $this->urlPath;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getResponseClass(): string
    {
        return $this->respClass;
    }
}