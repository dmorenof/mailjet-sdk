<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewContact extends \MailjetSDK\DTOs\Base\Contact
{
    public const array REQUIRED_FIELDS = [
    'Email',
];

    /**
     * Contact email address. Must be unique (not present already in the global contact list).
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
