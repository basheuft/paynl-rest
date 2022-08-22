<?php

namespace PaynlRest;

use PaynlRest\Model\Amount;
use PaynlRest\Request\RequestInterface;
use PaynlRest\Request\Transaction\CreateRequest;

class TransactionRequestFactory
{

    private string $returnUrl;
    private Amount $amount;

    private ?string $description = null;
    private ?string $reference = null;
    private ?int $expire = null;
    private ?string $exchangeUrl = null;

    public function __construct(string $returnUrl, int $amountInCents, string $currency = 'EUR')
    {
        $this->returnUrl = $returnUrl;
        $this->amount = new Amount($amountInCents, $currency);
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function setExpire(int|\DateTime $expire): self
    {
        if ($expire instanceof \DateTimeInterface) {
            $this->expire = $expire->getTimestamp();
        } else {
            $this->expire = $expire;
        }

        return $this;
    }

    public function setExchangeUrl(string $exchangeUrl): self
    {
        $this->exchangeUrl = $exchangeUrl;
        return $this;
    }

    public function create(): RequestInterface
    {
        return new CreateRequest(
            $this->amount,
            $this->returnUrl,
            $this->description,
            $this->reference,
            $this->expire,
            $this->exchangeUrl
        );
    }

}