<?php

namespace PaynlRest\Model;

class Merchant
{

    private ?string $code;
    private ?string $name;
    private ?string $status;

    public function __construct(?string $code, ?string $name, ?string $status)
    {
        $this->code = $code;
        $this->name = $name;
        $this->status = $status;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): Merchant
    {
        $this->code = $code;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Merchant
    {
        $this->name = $name;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): Merchant
    {
        $this->status = $status;
        return $this;
    }

}