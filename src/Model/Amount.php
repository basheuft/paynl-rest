<?php

namespace PaynlRest\Model;

class Amount
{

    private int $value;
    private string $currency;

    public function __construct(int $value, string $currency = 'EUR')
    {
        $this->value = $value;
        $this->currency = $currency;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): Amount
    {
        $this->value = $value;
        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): Amount
    {
        $this->currency = $currency;
        return $this;
    }

}