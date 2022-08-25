<?php

namespace PaynlRest\Response\Payout;

use PaynlRest\Model\Amount;

class Transaction
{

    private ?string $id = null;
    private ?string $orderId = null;
    private ?string $serviceId = null;
    private ?string $description = null;
    private ?string $reference = null;
    private ?Amount $amount = null;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     * @return Transaction
     */
    public function setId(?string $id): Transaction
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @param string|null $orderId
     * @return Transaction
     */
    public function setOrderId(?string $orderId): Transaction
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getServiceId(): ?string
    {
        return $this->serviceId;
    }

    /**
     * @param string|null $serviceId
     * @return Transaction
     */
    public function setServiceId(?string $serviceId): Transaction
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
     * @return Amount|null
     */
    public function getAmount(): ?Amount
    {
        return $this->amount;
    }

    /**
     * @param Amount|null $amount
     * @return Transaction
     */
    public function setAmount(?Amount $amount): Transaction
    {
        $this->amount = $amount;
        return $this;
    }
    
}