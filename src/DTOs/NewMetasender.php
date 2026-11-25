<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewMetasender extends \MailjetSDK\DTOs\Base\Metasender
{
    public const array REQUIRED_FIELDS = [
        'Email',
    ];

    /**
     * The email address for this metasender. To register a domain instead of a single email address, use an asterisk for the local part - e.g. `*&#64;domain.com`.
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
