<?php

namespace PaynlRest\Model\Payment;

use PaynlRest\Model\Iban;

class Payment implements PaymentInterface
{

    private string $method; // 'iban'
    private Iban $iban;

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    public function getIban(): Iban
    {
        return $this->iban;
    }

    public function setIban(Iban $iban): void
    {
        $this->iban = $iban;
    }

}