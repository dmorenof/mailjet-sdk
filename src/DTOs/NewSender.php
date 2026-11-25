<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewSender extends \MailjetSDK\DTOs\Base\Sender
{
    public const array REQUIRED_FIELDS = [
        'Email',
    ];

    /**
     * The email address or domain for this sender.
     */
    public string $Email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
