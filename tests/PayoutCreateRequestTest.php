<?php

namespace Tests;

use PaynlRest\Model\Customer\Customer;
use PaynlRest\Model\Payment\Payment;
use PaynlRest\Model\Stats\Stats;
use PaynlRest\Request\Payout\CreateRequest;
use PaynlRest\Request\Payout\Transaction;
use PaynlRest\Response\Payout\CreateResponse;
use PHPUnit\Framework\TestCase;

class PayoutCreateRequestTest extends TestCase
{

    public function testCreateRequest(): void
    {
        $transaction = new Transaction();
        $payment = Payment::create('test', 'test');
        $customer = new Customer();
        $stats = new Stats();

        $req = new CreateRequest($transaction, $payment, $customer, $stats);
        $this->assertEquals('POST', $req->getMethod());
        $this->assertEquals(CreateResponse::class, $req->getResponseClass());
        $this->assertEquals('payout', $req->getUrlPath());

        $data = $req->getData();
        $this->assertEquals([
            'transaction' => $transaction,
            'payment' => $payment,
            'customer' => $customer,
            'stats' => $stats
        ], $data);
    }

}