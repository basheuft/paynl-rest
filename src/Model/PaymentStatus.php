<?php

namespace PaynlRest\Model;

class PaymentStatus
{

    private ?int $code = null;
    private ?string $action = null;
    private ?string $phase = null;

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(?int $code): PaymentStatus
    {
        $this->code = $code;
        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): PaymentStatus
    {
        $this->action = $action;
        return $this;
    }

    public function getPhase(): ?string
    {
        return $this->phase;
    }

    public function setPhase(?string $phase): PaymentStatus
    {
        $this->phase = $phase;
        return $this;
    }

}