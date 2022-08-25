<?php

namespace PaynlRest\Exchange;

class Notification
{

    private ?string $action = null;
    private ?string $orderId = null;
    private ?string $paymentSessionId = null;
    private ?string $ipAddress = null;
    private mixed $amount;
    private mixed $extra1;
    private mixed $extra2;
    private mixed $extra3;
    private mixed $info;

    /**
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @param string|null $action
     * @return Notification
     */
    public function setAction(?string $action): Notification
    {
        $this->action = $action;
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
     * @return Notification
     */
    public function setOrderId(?string $orderId): Notification
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentSessionId(): ?string
    {
        return $this->paymentSessionId;
    }

    /**
     * @param string|null $paymentSessionId
     * @return Notification
     */
    public function setPaymentSessionId(?string $paymentSessionId): Notification
    {
        $this->paymentSessionId = $paymentSessionId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * @param string|null $ipAddress
     * @return Notification
     */
    public function setIpAddress(?string $ipAddress): Notification
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return Notification
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtra1()
    {
        return $this->extra1;
    }

    /**
     * @param mixed $extra1
     * @return Notification
     */
    public function setExtra1($extra1)
    {
        $this->extra1 = $extra1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtra2()
    {
        return $this->extra2;
    }

    /**
     * @param mixed $extra2
     * @return Notification
     */
    public function setExtra2($extra2)
    {
        $this->extra2 = $extra2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtra3()
    {
        return $this->extra3;
    }

    /**
     * @param mixed $extra3
     * @return Notification
     */
    public function setExtra3($extra3)
    {
        $this->extra3 = $extra3;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     * @return Notification
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }

}