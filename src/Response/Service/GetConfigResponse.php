<?php

namespace PaynlRest\Response\Service;

use PaynlRest\Model\Category;
use PaynlRest\Model\Merchant;
use PaynlRest\Response\ResponseInterface;

class GetConfigResponse implements ResponseInterface
{

    private string $code;
    private string $name;
    private Category $category;
    private Merchant $merchant;

    private array $paymentMethodGroups;
    private array $paymentMethods;

    private string $createdAt;
    private string $createdBy;
    private ?string $modifiedAt;
    private ?string $modifiedBy;
    private ?string $deletedAt;
    private ?string $deletedBy;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): GetConfigResponse
    {
        $this->code = $code;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): GetConfigResponse
    {
        $this->name = $name;
        return $this;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): GetConfigResponse
    {
        $this->category = $category;
        return $this;
    }

    public function getMerchant(): Merchant
    {
        return $this->merchant;
    }

    public function setMerchant(Merchant $merchant): GetConfigResponse
    {
        $this->merchant = $merchant;
        return $this;
    }

    public function getPaymentMethodGroups(): array
    {
        return $this->paymentMethodGroups;
    }

    public function setPaymentMethodGroups(array $paymentMethodGroups): GetConfigResponse
    {
        $this->paymentMethodGroups = $paymentMethodGroups;
        return $this;
    }

    public function getPaymentMethods(): array
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(array $paymentMethods): GetConfigResponse
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): GetConfigResponse
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(string $createdBy): GetConfigResponse
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getModifiedAt(): ?string
    {
        return $this->modifiedAt;
    }

    public function setModifiedAt(?string $modifiedAt): GetConfigResponse
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }

    public function getModifiedBy(): ?string
    {
        return $this->modifiedBy;
    }

    public function setModifiedBy(?string $modifiedBy): GetConfigResponse
    {
        $this->modifiedBy = $modifiedBy;
        return $this;
    }

    public function getDeletedAt(): ?string
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?string $deletedAt): GetConfigResponse
    {
        $this->deletedAt = $deletedAt;
        return $this;
    }

    public function getDeletedBy(): ?string
    {
        return $this->deletedBy;
    }

    public function setDeletedBy(?string $deletedBy): GetConfigResponse
    {
        $this->deletedBy = $deletedBy;
        return $this;
    }

}