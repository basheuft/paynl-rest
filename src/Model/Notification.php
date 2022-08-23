<?php

namespace PaynlRest\Model;

class Notification implements NotificationInterface
{

    private ?string $type;
    private ?string $recipient;

    public function __construct(?string $type, ?string $recipient)
    {
        $this->type = $type;
        $this->recipient = $recipient;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getRecipient(): ?string
    {
        return $this->recipient;
    }
}