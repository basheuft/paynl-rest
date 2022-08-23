<?php

namespace PaynlRest\Model;

interface NotificationInterface
{

    public function getType(): ?string;
    public function getRecipient(): ?string;

}