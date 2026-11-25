<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewApikey extends \MailjetSDK\DTOs\Base\Apikey
{
    public const array REQUIRED_FIELDS = [
        'Name',
    ];

    /**
     * User readable name for this API Key.
     */
    public string $Name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
