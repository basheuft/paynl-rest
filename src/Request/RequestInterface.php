<?php

namespace PaynlRest\Request;

use PaynlRest\Exception\ServiceIdNotSetException;

interface RequestInterface
{

    public function getMethod(): string;
    public function getUrlPath(): string;

    /** @throws ServiceIdNotSetException */
    public function getBody(): ?string;

    public function getResponseClass(): string;

}