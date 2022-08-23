<?php

namespace PaynlRest\Model;

class Order implements OrderInterface
{

    private ?string $countryCode;
    private ?string $deliveryDate;
    private ?string $invoiceDate;
    private ?AddressInterface $deliveryAddress;
    private ?AddressInterface $invoiceAddress;
    private ?array $products;

    public function __construct(
        ?string $countryCode,
        ?string $deliveryDate,
        ?string $invoiceDate,
        ?AddressInterface $deliveryAddress,
        ?AddressInterface $invoiceAddress,
        ?array $products
    )
    {
        $this->countryCode = $countryCode;
        $this->deliveryDate = $deliveryDate;
        $this->invoiceDate = $invoiceDate;
        $this->deliveryAddress = $deliveryAddress;
        $this->invoiceAddress = $invoiceAddress;
        $this->products = $products;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    public function getInvoiceDate(): ?string
    {
        return $this->invoiceDate;
    }

    public function getDeliveryAddress(): ?AddressInterface
    {
        return $this->deliveryAddress;
    }

    public function getInvoiceAddress(): ?AddressInterface
    {
        return $this->invoiceAddress;
    }

    public function getProducts(): ?array
    {
        return $this->products;
    }

}