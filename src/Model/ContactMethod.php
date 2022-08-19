<?php

namespace PaynlRest\Model;

class ContactMethod
{

    private ?string $type;
    private ?string $value;
    private ?string $description;

    public function __construct(?string $type, ?string $value, ?string $description)
    {
        $this->type = $type;
        $this->value = $value;
        $this->description = $description;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): ContactMethod
    {
        $this->type = $type;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): ContactMethod
    {
        $this->value = $value;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): ContactMethod
    {
        $this->description = $description;
        return $this;
    }

}