<?php

namespace Tests;

use PaynlRest\Request\Transaction\StatusRequest;
use PaynlRest\Response\Transaction\StatusResponse;
use PHPUnit\Framework\TestCase;

class TransactionStatusRequestTest extends TestCase
{

    public function testStatusRequest(): void
    {
        $req = new StatusRequest('test');
        $this->assertEquals('GET', $req->getMethod());
        $this->assertEquals('transactions/test/status', $req->getUrlPath());
        $this->assertEquals(StatusResponse::class, $req->getResponseClass());
        $this->assertEquals([], $req->getData());
    }

}