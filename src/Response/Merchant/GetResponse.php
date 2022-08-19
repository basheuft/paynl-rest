<?php

namespace PaynlRest\Response\Merchant;

use PaynlRest\Model\Address;
use PaynlRest\Model\BankAccount;
use PaynlRest\Model\ContactMethod;
use PaynlRest\Response\ResponseInterface;

class GetResponse implements ResponseInterface
{

    private string $id;
    private string $name;
    private Address $postalAddress;
    private Address $visitAddress;
    private string $vat;
    private string $website;
    private string $coc;
    private BankAccount $bankAccount;
    private array $contactMethods;
    private array $trademarks;
    private string $createdAt;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return GetResponse
     */
    public function setId(string $id): GetResponse
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return GetResponse
     */
    public function setName(string $name): GetResponse
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Address
     */
    public function getPostalAddress(): Address
    {
        return $this->postalAddress;
    }

    /**
     * @param Address $postalAddress
     * @return GetResponse
     */
    public function setPostalAddress(Address $postalAddress): GetResponse
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getVisitAddress(): Address
    {
        return $this->visitAddress;
    }

    /**
     * @param Address $visitAddress
     * @return GetResponse
     */
    public function setVisitAddress(Address $visitAddress): GetResponse
    {
        $this->visitAddress = $visitAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getVat(): string
    {
        return $this->vat;
    }

    /**
     * @param string $vat
     * @return GetResponse
     */
    public function setVat(string $vat): GetResponse
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite(): string
    {
        return $this->website;
    }

    /**
     * @param string $website
     * @return GetResponse
     */
    public function setWebsite(string $website): GetResponse
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoc(): string
    {
        return $this->coc;
    }

    /**
     * @param string $coc
     * @return GetResponse
     */
    public function setCoc(string $coc): GetResponse
    {
        $this->coc = $coc;
        return $this;
    }

    /**
     * @return BankAccount
     */
    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

    /**
     * @param BankAccount $bankAccount
     * @return GetResponse
     */
    public function setBankAccount(BankAccount $bankAccount): GetResponse
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @return array
     */
    public function getContactMethods(): array
    {
        return $this->contactMethods;
    }

    /**
     * @param array $contactMethods
     * @return GetResponse
     */
    public function setContactMethods(array $contactMethods): GetResponse
    {
        $this->contactMethods = $contactMethods;
        return $this;
    }

    /**
     * @return array
     */
    public function getTrademarks(): array
    {
        return $this->trademarks;
    }

    /**
     * @param array $trademarks
     * @return GetResponse
     */
    public function setTrademarks(array $trademarks): GetResponse
    {
        $this->trademarks = $trademarks;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return GetResponse
     */
    public function setCreatedAt(string $createdAt): GetResponse
    {
        $this->createdAt = $createdAt;
        return $this;
    }

}