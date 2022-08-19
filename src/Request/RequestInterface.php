<?php

namespace PaynlRest\Request;

interface RequestInterface
{

    public function getMethod(): string;
    public function getUrlPath(): string;
    public function getData(): array;
    public function getResponseClass(): string;

}