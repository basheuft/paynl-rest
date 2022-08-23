<?php

namespace PaynlRest\Model\Customer;

interface CustomerInterface
{

    public function getFirstName(): string;
    public function getLastName(): string;
    public function getIpAddress(): string;
    public function getBirthDate(): string;
    public function getGender(): string;
    public function getPhone(): string;
    public function getEmail(): string;
    public function getLanguage(): string;
    public function getTrust(): int;
    public function getReference(): string;

}