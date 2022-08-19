<?php

namespace PaynlRest\Model\Transaction;

use PaynlRest\Model\Amount;

interface TransactionInterface
{

    public function getType(): string;
    public function getServiceId(): string;
    public function getDescription(): ?string;
    public function getReference(): ?string;
    public function getExchangeUrl(): ?string;
    public function getAmount(): Amount;

}