<?php

namespace PaynlRest\Response\Payout;

use PaynlRest\Response\ResponseInterface;

class CreateResponse implements ResponseInterface
{

    private Transaction $transaction;
    private mixed $created;
    private mixed $modified;

    public function getTransaction(): Transaction
    {
        return $this->transaction;
    }

    public function setTransaction(Transaction $transaction): void
    {
        $this->transaction = $transaction;
    }

    public function getCreated(): mixed
    {
        return $this->created;
    }

    public function setCreated(mixed $created): void
    {
        $this->created = $created;
    }

    public function getModified(): mixed
    {
        return $this->modified;
    }

    public function setModified(mixed $modified): void
    {
        $this->modified = $modified;
    }

}