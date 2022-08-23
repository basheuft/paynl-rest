<?php

namespace Tests;

use PaynlRest\Model\Amount;
use PaynlRest\Request\Transaction\CreateRequest;
use PaynlRest\Response\Transaction\CreateResponse;
use PHPUnit\Framework\TestCase;

class TransactionCreateRequestTest extends TestCase
{

    public function testCreateRequest(): void
    {
        $amount = new Amount(10, 'EUR');
        $returnUrl = 'http://returnurl.pay.nl/';

        $req = new CreateRequest($amount, $returnUrl, null, null, null, null, null, null);
        $this->assertEquals('POST', $req->getMethod());
        $this->assertEquals('transactions', $req->getUrlPath());
        $this->assertEquals(CreateResponse::class, $req->getResponseClass());
    }

}