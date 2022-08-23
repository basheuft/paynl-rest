<?php

namespace PaynlRest\Model;

interface OrderInterface
{

    public function getCountryCode(): ?string;
    public function getDeliveryDate(): ?string;
    public function getInvoiceDate(): ?string;
    public function getDeliveryAddress(): ?AddressInterface;
    public function getInvoiceAddress(): ?AddressInterface;
    public function getProducts(): ?array;
}