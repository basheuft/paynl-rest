<?php

namespace PaynlRest\Model;

interface AddressInterface
{

    public function getFirstName(): ?string;
    public function getLastName(): ?string;
    public function getStreetName(): ?string;
    public function getStreetNumber(): ?string;
    public function getStreetNumberExtension(): ?string;
    public function getZipCode(): ?string;
    public function getCity(): ?string;
    public function getCountryCode(): ?string;
    public function getRegionCode(): ?string;

}