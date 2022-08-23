<?php

namespace PaynlRest\Model\Stats;

interface StatsInterface
{

    public function getInfo(): string;
    public function getTool(): string;
    public function getObject(): string;
    public function getExtra1(): string;
    public function getExtra2(): string;
    public function getExtra3(): string;
    public function getDomainId(): string;

}