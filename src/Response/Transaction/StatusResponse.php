<?php

namespace PaynlRest\Response\Transaction;

use PaynlRest\Model\Amount;
use PaynlRest\Model\PaymentData;
use PaynlRest\Model\PaymentMethod;
use PaynlRest\Model\PaymentStatus;
use PaynlRest\Response\ResponseInterface;

class StatusResponse implements ResponseInterface
{

    private string $id;

    private Amount $amount;
    private Amount $amountConverted;
    private Amount $amountPaid;
    private Amount $amountRefunded;

    private PaymentData $paymentData;
    private PaymentMethod $paymentMethod;
    private PaymentStatus $status;

    private string $description;
    private string $orderId;
    private ?string $reference;
    private string $serviceCode;

    private ?string $createdAt;
    private ?string $createdBy;
    private ?string $expiresAt;
    private ?string $modifiedAt;
    private ?string $modifiedBy;
    private ?string $deletedAt;
    private ?string $deletedBy;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return StatusResponse
     */
    public function setId(string $id): StatusResponse
    {
        $this->id = $id;
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
     * @return StatusResponse
     */
    public function setAmount(Amount $amount): StatusResponse
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getAmountConverted(): Amount
    {
        return $this->amountConverted;
    }

    /**
     * @param Amount $amountConverted
     * @return StatusResponse
     */
    public function setAmountConverted(Amount $amountConverted): StatusResponse
    {
        $this->amountConverted = $amountConverted;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getAmountPaid(): Amount
    {
        return $this->amountPaid;
    }

    /**
     * @param Amount $amountPaid
     * @return StatusResponse
     */
    public function setAmountPaid(Amount $amountPaid): StatusResponse
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getAmountRefunded(): Amount
    {
        return $this->amountRefunded;
    }

    /**
     * @param Amount $amountRefunded
     * @return StatusResponse
     */
    public function setAmountRefunded(Amount $amountRefunded): StatusResponse
    {
        $this->amountRefunded = $amountRefunded;
        return $this;
    }

    /**
     * @return PaymentData
     */
    public function getPaymentData(): PaymentData
    {
        return $this->paymentData;
    }

    /**
     * @param PaymentData $paymentData
     * @return StatusResponse
     */
    public function setPaymentData(PaymentData $paymentData): StatusResponse
    {
        $this->paymentData = $paymentData;
        return $this;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }

    /**
     * @param PaymentMethod $paymentMethod
     * @return StatusResponse
     */
    public function setPaymentMethod(PaymentMethod $paymentMethod): StatusResponse
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return PaymentStatus
     */
    public function getStatus(): PaymentStatus
    {
        return $this->status;
    }

    /**
     * @param PaymentStatus $status
     * @return StatusResponse
     */
    public function setStatus(PaymentStatus $status): StatusResponse
    {
        $this->status = $status;
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
     * @return StatusResponse
     */
    public function setDescription(string $description): StatusResponse
    {
        $this->description = $description;
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
     * @return StatusResponse
     */
    public function setOrderId(string $orderId): StatusResponse
    {
        $this->orderId = $orderId;
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
     * @return StatusResponse
     */
    public function setReference(?string $reference): StatusResponse
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceCode(): string
    {
        return $this->serviceCode;
    }

    /**
     * @param string $serviceCode
     * @return StatusResponse
     */
    public function setServiceCode(string $serviceCode): StatusResponse
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @param ?string $createdAt
     * @return StatusResponse
     */
    public function setCreatedAt(?string $createdAt): StatusResponse
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    /**
     * @param ?string $createdBy
     * @return StatusResponse
     */
    public function setCreatedBy(?string $createdBy): StatusResponse
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getExpiresAt(): ?string
    {
        return $this->expiresAt;
    }

    /**
     * @param ?string $expiresAt
     * @return StatusResponse
     */
    public function setExpiresAt(?string $expiresAt): StatusResponse
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getModifiedAt(): ?string
    {
        return $this->modifiedAt;
    }

    /**
     * @param string|null $modifiedAt
     * @return StatusResponse
     */
    public function setModifiedAt(?string $modifiedAt): StatusResponse
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getModifiedBy(): ?string
    {
        return $this->modifiedBy;
    }

    /**
     * @param string|null $modifiedBy
     * @return StatusResponse
     */
    public function setModifiedBy(?string $modifiedBy): StatusResponse
    {
        $this->modifiedBy = $modifiedBy;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeletedAt(): ?string
    {
        return $this->deletedAt;
    }

    /**
     * @param string|null $deletedAt
     * @return StatusResponse
     */
    public function setDeletedAt(?string $deletedAt): StatusResponse
    {
        $this->deletedAt = $deletedAt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeletedBy(): ?string
    {
        return $this->deletedBy;
    }

    /**
     * @param string|null $deletedBy
     * @return StatusResponse
     */
    public function setDeletedBy(?string $deletedBy): StatusResponse
    {
        $this->deletedBy = $deletedBy;
        return $this;
    }

}