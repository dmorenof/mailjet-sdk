<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Listrecipient extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether the list recipient is unsubscribed from this List ID or not.
     *
     * Default value: `false`
     *
     */
    public bool $IsUnsubscribed;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'IsUnsubscribed' => is_bool($value) ? $this->IsUnsubscribed = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
