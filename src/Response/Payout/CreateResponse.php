<?php

namespace PaynlRest\Response\Payout;

use PaynlRest\Model\Transaction\Transaction;
use PaynlRest\Response\ResponseInterface;

class CreateResponse implements ResponseInterface
{

    private Transaction $transaction;
    private int $created;
    private int $modified;

    public function getTransaction(): Transaction
    {
        return $this->transaction;
    }

    public function setTransaction(Transaction $transaction): void
    {
        $this->transaction = $transaction;
    }

    public function getCreated(): int
    {
        return $this->created;
    }

    public function setCreated(int $created): void
    {
        $this->created = $created;
    }

    public function getModified(): int
    {
        return $this->modified;
    }

    public function setModified(int $modified): void
    {
        $this->modified = $modified;
    }

}