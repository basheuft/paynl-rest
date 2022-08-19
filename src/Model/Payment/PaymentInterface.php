<?php

namespace PaynlRest\Model\Payment;

use PaynlRest\Model\Iban;

interface PaymentInterface
{

    public function getMethod(): string;
    public function getIban(): Iban;

}