<?php

namespace PaynlRest\Model;

class Category
{

    private ?string $code;
    private ?string $name;

    public function __construct(?string $code, ?string $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): Category
    {
        $this->code = $code;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Category
    {
        $this->name = $name;
        return $this;
    }

}