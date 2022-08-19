<?php

namespace PaynlRest\Exchange;

class Notification
{

    private string $action;
    private string $paymentSessionId;
    private string $pincode;
    private string $websiteLocationId;
    private string $websiteId;
    private string $programId;
    private string $promotorId;
    private string $tool;
    private string $info;
    private string $domainId;
    private mixed $object;
    private string $ipAddress;
    private string $amount;
    private string $extra1;
    private string $extra2;
    private string $extra3;
    private string $secret;
    private string $enduserId;
    private string $productId;
    private string $paymentProfileId;
    private string $paymentMethodId;
    private string $orderId;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    /**
     * @return string
     */
    public function getPaymentSessionId(): string
    {
        return $this->paymentSessionId;
    }

    /**
     * @param string $paymentSessionId
     */
    public function setPaymentSessionId(string $paymentSessionId): void
    {
        $this->paymentSessionId = $paymentSessionId;
    }

    /**
     * @return string
     */
    public function getPincode(): string
    {
        return $this->pincode;
    }

    /**
     * @param string $pincode
     */
    public function setPincode(string $pincode): void
    {
        $this->pincode = $pincode;
    }

    /**
     * @return string
     */
    public function getWebsiteLocationId(): string
    {
        return $this->websiteLocationId;
    }

    /**
     * @param string $websiteLocationId
     */
    public function setWebsiteLocationId(string $websiteLocationId): void
    {
        $this->websiteLocationId = $websiteLocationId;
    }

    /**
     * @return string
     */
    public function getWebsiteId(): string
    {
        return $this->websiteId;
    }

    /**
     * @param string $websiteId
     */
    public function setWebsiteId(string $websiteId): void
    {
        $this->websiteId = $websiteId;
    }

    /**
     * @return string
     */
    public function getProgramId(): string
    {
        return $this->programId;
    }

    /**
     * @param string $programId
     */
    public function setProgramId(string $programId): void
    {
        $this->programId = $programId;
    }

    /**
     * @return string
     */
    public function getPromotorId(): string
    {
        return $this->promotorId;
    }

    /**
     * @param string $promotorId
     */
    public function setPromotorId(string $promotorId): void
    {
        $this->promotorId = $promotorId;
    }

    /**
     * @return string
     */
    public function getTool(): string
    {
        return $this->tool;
    }

    /**
     * @param string $tool
     */
    public function setTool(string $tool): void
    {
        $this->tool = $tool;
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * @param string $info
     */
    public function setInfo(string $info): void
    {
        $this->info = $info;
    }

    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }

    /**
     * @param string $domainId
     */
    public function setDomainId(string $domainId): void
    {
        $this->domainId = $domainId;
    }

    /**
     * @return mixed
     */
    public function getObject(): mixed
    {
        return $this->object;
    }

    /**
     * @param mixed $object
     */
    public function setObject(mixed $object): void
    {
        $this->object = $object;
    }

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getExtra1(): string
    {
        return $this->extra1;
    }

    /**
     * @param string $extra1
     */
    public function setExtra1(string $extra1): void
    {
        $this->extra1 = $extra1;
    }

    /**
     * @return string
     */
    public function getExtra2(): string
    {
        return $this->extra2;
    }

    /**
     * @param string $extra2
     */
    public function setExtra2(string $extra2): void
    {
        $this->extra2 = $extra2;
    }

    /**
     * @return string
     */
    public function getExtra3(): string
    {
        return $this->extra3;
    }

    /**
     * @param string $extra3
     */
    public function setExtra3(string $extra3): void
    {
        $this->extra3 = $extra3;
    }

    /**
     * @return string
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     */
    public function setSecret(string $secret): void
    {
        $this->secret = $secret;
    }

    /**
     * @return string
     */
    public function getEnduserId(): string
    {
        return $this->enduserId;
    }

    /**
     * @param string $enduserId
     */
    public function setEnduserId(string $enduserId): void
    {
        $this->enduserId = $enduserId;
    }

    /**
     * @return string
     */
    public function getProductId(): string
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     */
    public function setProductId(string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @return string
     */
    public function getPaymentProfileId(): string
    {
        return $this->paymentProfileId;
    }

    /**
     * @param string $paymentProfileId
     */
    public function setPaymentProfileId(string $paymentProfileId): void
    {
        $this->paymentProfileId = $paymentProfileId;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId(): string
    {
        return $this->paymentMethodId;
    }

    /**
     * @param string $paymentMethodId
     */
    public function setPaymentMethodId(string $paymentMethodId): void
    {
        $this->paymentMethodId = $paymentMethodId;
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
     */
    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

}