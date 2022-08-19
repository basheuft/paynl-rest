<?php

namespace PaynlRest\Model;

class Iban
{

    private string $number;
    private ?string $bic;
    private string $holder;

    public function __construct(string $number, string $holder, string $bic = null)
    {
        $this->number = $number;
        $this->holder = $holder;
        $this->bic = $bic;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): void
    {
        $this->bic = $bic;
    }

    public function getHolder(): string
    {
        return $this->holder;
    }

    public function setHolder(string $holder): void
    {
        $this->holder = $holder;
    }

}