<?php

namespace Tests;

use PaynlRest\Requester;
use PHPUnit\Framework\TestCase;

class RequesterTest extends TestCase
{

    public function testGetB64Auth(): void
    {
        $requester = $this->createRequester();
        $b64 = $this->callPrivateMethod($requester, 'getB64Auth');

        $this->assertEquals('dGVzdENvZGU6dGVzdFRva2Vu', $b64);
    }

    private function createRequester(): Requester
    {
        return new Requester('testCode', 'testToken', null);
    }

    private function callPrivateMethod(mixed $object, string $name, array $args = []): mixed
    {
        $class = new \ReflectionClass($object);
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $args);
    }

}