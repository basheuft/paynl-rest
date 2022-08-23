<?php

namespace PaynlRest\Model;

class PaymentData
{

    private ?string $method = null;
    private ?string $customerKey = null;
    private ?string $customerId = null;
    private ?string $customerName = null;
    private ?string $ipAddress = null;
    private ?bool $secureStatus = null;

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }

    public function getCustomerKey(): ?string
    {
        return $this->customerKey;
    }

    public function setCustomerKey(?string $customerKey): void
    {
        $this->customerKey = $customerKey;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    public function setCustomerName(?string $customerName): void
    {
        $this->customerName = $customerName;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    public function getSecureStatus(): ?bool
    {
        return $this->secureStatus;
    }

    public function setSecureStatus(?bool $secureStatus): void
    {
        $this->secureStatus = $secureStatus;
    }

}