<?php

namespace PaynlRest\Exchange;

class Notification
{

    private string $action;
    private string $orderId;
    private string $paymentSessionId;
    private string $ipAddress;
    private mixed $amount;
    private mixed $extra1;
    private mixed $extra2;
    private mixed $extra3;
    private mixed $info;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return Notification
     */
    public function setAction(string $action): Notification
    {
        $this->action = $action;
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
     * @return Notification
     */
    public function setOrderId(string $orderId): Notification
    {
        $this->orderId = $orderId;
        return $this;
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
     * @return Notification
     */
    public function setPaymentSessionId(string $paymentSessionId): Notification
    {
        $this->paymentSessionId = $paymentSessionId;
        return $this;
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
     * @return Notification
     */
    public function setIpAddress(string $ipAddress): Notification
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount(): mixed
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return Notification
     */
    public function setAmount(mixed $amount): Notification
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtra1(): mixed
    {
        return $this->extra1;
    }

    /**
     * @param mixed $extra1
     * @return Notification
     */
    public function setExtra1(mixed $extra1): Notification
    {
        $this->extra1 = $extra1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtra2(): mixed
    {
        return $this->extra2;
    }

    /**
     * @param mixed $extra2
     * @return Notification
     */
    public function setExtra2(mixed $extra2): Notification
    {
        $this->extra2 = $extra2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtra3(): mixed
    {
        return $this->extra3;
    }

    /**
     * @param mixed $extra3
     * @return Notification
     */
    public function setExtra3(mixed $extra3): Notification
    {
        $this->extra3 = $extra3;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInfo(): mixed
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     * @return Notification
     */
    public function setInfo(mixed $info): Notification
    {
        $this->info = $info;
        return $this;
    }

}