<?php

namespace PaynlRest\Model;

interface PaymentMethodInterface
{

    public function getId(): int;
    public function getSubId(): ?string;

}