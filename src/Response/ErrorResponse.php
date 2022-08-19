<?php

namespace PaynlRest\Response;

use GuzzleHttp\Exception\GuzzleException;

class ErrorResponse implements ResponseInterface
{

    private int $code;
    private string $message;

    public static function fromGuzzleException(GuzzleException $e): ErrorResponse
    {
        return new ErrorResponse($e->getCode(), $e->getMessage());
    }

    public function __construct(int $code, string $message)
    {
        $this->code = $code;
        $this->message = $message;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

}