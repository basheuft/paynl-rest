<?php

namespace PaynlRest\Model;

class Address implements AddressInterface
{

    private ?string $firstName;
    private ?string $lastName;
    private ?string $streetName;
    private ?string $streetNumber;
    private ?string $streetNumberExtension;
    private ?string $zipCode;
    private ?string $city;
    private ?string $countryCode;
    private ?string $regionCode;

    public function __construct(?string $firstName, ?string $lastName, ?string $streetName, ?string $streetNumber, ?string $streetNumberExtension, ?string $zipCode, ?string $city, ?string $countryCode, ?string $regionCode)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->streetName = $streetName;
        $this->streetNumber = $streetNumber;
        $this->streetNumberExtension = $streetNumberExtension;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->countryCode = $countryCode;
        $this->regionCode = $regionCode;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): Address
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): Address
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    public function setStreetName(?string $streetName): Address
    {
        $this->streetName = $streetName;
        return $this;
    }

    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    public function setStreetNumber(?string $streetNumber): Address
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    public function getStreetNumberExtension(): ?string
    {
        return $this->streetNumberExtension;
    }

    public function setStreetNumberExtension(?string $streetNumberExtension): Address
    {
        $this->streetNumberExtension = $streetNumberExtension;
        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): Address
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): Address
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }

    public function setRegionCode(?string $regionCode): Address
    {
        $this->regionCode = $regionCode;
        return $this;
    }

}