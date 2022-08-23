<?php

namespace PaynlRest\Model;

class PaymentMethod implements PaymentMethodInterface
{

    private int $id;
    private ?string $subId;

    public function __construct(int $id, ?string $subId = null)
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

    public function getSubId(): ?string
    {
        return $this->subId;
    }

    public function setSubId(?string $subId): self
    {
        $this->subId = $subId;
        return $this;
    }

}