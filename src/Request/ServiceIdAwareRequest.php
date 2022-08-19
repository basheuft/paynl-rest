<?php

namespace PaynlRest\Request;

use PaynlRest\Exception\ServiceIdNotSetException;

abstract class ServiceIdAwareRequest implements RequestInterface
{

    protected string $serviceId;

    public function setServiceId(string $serviceId): void
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @throws ServiceIdNotSetException
     */
    public function getServiceId(): string
    {
        if (strlen($this->serviceId) < 1) {
            throw new ServiceIdNotSetException();
        }
        return $this->serviceId;
    }

}