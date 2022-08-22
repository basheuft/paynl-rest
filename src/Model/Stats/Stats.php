<?php

namespace PaynlRest\Model\Stats;

class Stats implements StatsInterface
{

    private string $info;
    private string $tool;
    private string $object;
    private string $extra1;
    private string $extra2;
    private string $extra3;
    private string $domainId;

    public function getInfo(): string
    {
        return $this->info;
    }

    public function setInfo(string $info): void
    {
        $this->info = $info;
    }

    public function getTool(): string
    {
        return $this->tool;
    }

    public function setTool(string $tool): void
    {
        $this->tool = $tool;
    }

    public function getObject(): string
    {
        return $this->object;
    }

    public function setObject(string $object): void
    {
        $this->object = $object;
    }

    public function getExtra1(): string
    {
        return $this->extra1;
    }

    public function setExtra1(string $extra1): void
    {
        $this->extra1 = $extra1;
    }

    public function getExtra2(): string
    {
        return $this->extra2;
    }

    public function setExtra2(string $extra2): void
    {
        $this->extra2 = $extra2;
    }

    public function getExtra3(): string
    {
        return $this->extra3;
    }

    public function setExtra3(string $extra3): void
    {
        $this->extra3 = $extra3;
    }

    public function getDomainId(): string
    {
        return $this->domainId;
    }

    public function setDomainId(string $domainId): void
    {
        $this->domainId = $domainId;
    }

}