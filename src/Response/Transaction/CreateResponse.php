<?php

namespace PaynlRest\Response\Transaction;

use PaynlRest\Model\Amount;
use PaynlRest\Response\ResponseInterface;

class CreateResponse implements ResponseInterface
{

    private Amount $amount;
    private string $paymentUrl;

    private string $orderId;
    private string $description;
    private string $id;
    private string $manualTransferCode;
    private mixed $created;
    private int $modified;

    /**
     * @return Amount
     */
    public function getAmount(): Amount
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     * @return CreateResponse
     */
    public function setAmount(Amount $amount): CreateResponse
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentUrl(): string
    {
        return $this->paymentUrl;
    }

    /**
     * @param string $paymentUrl
     * @return CreateResponse
     */
    public function setPaymentUrl(string $paymentUrl): CreateResponse
    {
        $this->paymentUrl = $paymentUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return CreateResponse
     */
    public function setOrderId(string $orderId): CreateResponse
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return CreateResponse
     */
    public function setDescription(string $description): CreateResponse
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return CreateResponse
     */
    public function setId(string $id): CreateResponse
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getManualTransferCode(): string
    {
        return $this->manualTransferCode;
    }

    /**
     * @param string $manualTransferCode
     * @return CreateResponse
     */
    public function setManualTransferCode(string $manualTransferCode): CreateResponse
    {
        $this->manualTransferCode = $manualTransferCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreated(): mixed
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     * @return CreateResponse
     */
    public function setCreated(mixed $created): CreateResponse
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return int
     */
    public function getModified(): int
    {
        return $this->modified;
    }

    /**
     * @param int $modified
     * @return CreateResponse
     */
    public function setModified(int $modified): CreateResponse
    {
        $this->modified = $modified;
        return $this;
    }

}