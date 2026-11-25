<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class ArrayNewsletterTestRecipients extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'Email',
    ];

    /**
     * The email address for the contact.
     */
    public string $Email;
    /**
     * User-selected name for the contact.
     */
    public string $Name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
