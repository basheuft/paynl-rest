<?php

namespace PaynlRest\Request\Payout;

use PaynlRest\Model\Amount;

class Transaction
{

    private string $type;
    private string $serviceId;
    private ?string $description;
    private ?string $reference;
    private ?string $exchangeUrl;
    private Amount $amount;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Transaction
     */
    public function setType(string $type): Transaction
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    /**
     * @param string $serviceId
     * @return Transaction
     */
    public function setServiceId(string $serviceId): Transaction
    {
        $this->serviceId = $serviceId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return Transaction
     */
    public function setDescription(?string $description): Transaction
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string|null $reference
     * @return Transaction
     */
    public function setReference(?string $reference): Transaction
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExchangeUrl(): ?string
    {
        return $this->exchangeUrl;
    }

    /**
     * @param string|null $exchangeUrl
     * @return Transaction
     */
    public function setExchangeUrl(?string $exchangeUrl): Transaction
    {
        $this->exchangeUrl = $exchangeUrl;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getAmount(): Amount
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     * @return Transaction
     */
    public function setAmount(Amount $amount): Transaction
    {
        $this->amount = $amount;
        return $this;
    }

}