<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class RequesterTest extends TestCase
{

    public function testGetB64Auth(): void
    {
        $requester = new \PaynlRest\Requester('testCode', 'testToken', null);
        $b64 = $this->callPrivateMethod($requester, 'getB64Auth');

        $this->assertEquals('dGVzdENvZGU6dGVzdFRva2Vu', $b64);
    }

    private function callPrivateMethod(mixed $object, string $name, array $args = []): mixed
    {
        $class = new \ReflectionClass($object);
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $args);
    }

}