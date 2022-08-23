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

    public function getSubId(): ?string
    {
        return $this->subId;
    }

}