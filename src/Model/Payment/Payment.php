<?php

namespace PaynlRest\Model\Payment;

use PaynlRest\Model\Iban;

class Payment implements PaymentInterface
{

    private string $method; // 'iban'
    private Iban $iban;

    public static function create(string $ibanNumber, string $ibanName, ?string $bic = null): Payment
    {
        $p = new Payment();
        $p->setMethod('iban');
        $p->setIban(new Iban($ibanNumber, $ibanName, $bic));

        return $p;
    }

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