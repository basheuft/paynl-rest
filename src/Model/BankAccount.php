<?php

namespace PaynlRest\Model;

class BankAccount
{

    private ?string $bic;
    private ?string $iban;
    private ?string $owner;

    public function __construct(?string $bic, ?string $iban, ?string $owner)
    {
        $this->bic = $bic;
        $this->iban = $iban;
        $this->owner = $owner;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): BankAccount
    {
        $this->bic = $bic;
        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): BankAccount
    {
        $this->iban = $iban;
        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): BankAccount
    {
        $this->owner = $owner;
        return $this;
    }

}