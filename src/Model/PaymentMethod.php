<?php

namespace PaynlRest\Model;

class PaymentMethod implements PaymentMethodInterface
{

    private int $id;
    private mixed $subId;

    public function __construct(int $id, mixed $subId = null)
    {
        $this->id = $id;
        $this->subId = $subId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getSubId(): mixed
    {
        return $this->subId;
    }

    public function setSubId(mixed $subId): self
    {
        $this->subId = $subId;
        return $this;
    }

}