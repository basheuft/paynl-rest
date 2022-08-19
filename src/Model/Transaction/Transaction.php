<?php

namespace PaynlRest\Model\Transaction;

use PaynlRest\Model\Amount;

class Transaction implements TransactionInterface
{

    private string $type;
    private string $serviceId;
    private ?string $description;
    private ?string $reference;
    private ?string $exchangeUrl;
    private Amount $amount;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    public function setServiceId(string $serviceId): void
    {
        $this->serviceId = $serviceId;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    public function getExchangeUrl(): ?string
    {
        return $this->exchangeUrl;
    }

    public function setExchangeUrl(?string $exchangeUrl): void
    {
        $this->exchangeUrl = $exchangeUrl;
    }

    public function getAmount(): Amount
    {
        return $this->amount;
    }

    public function setAmount(Amount $amount): void
    {
        $this->amount = $amount;
    }

}