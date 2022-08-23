<?php

namespace PaynlRest\Model;

interface TransferDataInterface
{

    public function getName(): ?string;
    public function getValue(): ?string;

}