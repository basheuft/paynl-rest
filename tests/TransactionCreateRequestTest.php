<?php

namespace Tests;

use PaynlRest\Model\Amount;
use PaynlRest\Model\Customer\Customer;
use PaynlRest\Request\Transaction\CreateRequest;
use PaynlRest\Response\Transaction\CreateResponse;
use PHPUnit\Framework\TestCase;

class TransactionCreateRequestTest extends TestCase
{

    public function testCreateRequest(): void
    {
        $amount = new Amount(10, 'EUR');
        $returnUrl = 'http://returnurl.pay.nl/';

        $customer = new Customer();
        $customer->setIpAddress('127.0.0.1');

        $req = new CreateRequest($amount, $returnUrl, null, $customer, null, null, null, null);
        $req->setServiceId('test');

        $this->assertEquals('POST', $req->getMethod());
        $this->assertEquals('transactions', $req->getUrlPath());
        $this->assertEquals(CreateResponse::class, $req->getResponseClass());

        $data = $req->getData();
        $this->assertEquals('127.0.0.1', $data['customer']->getIpAddress());
    }

}