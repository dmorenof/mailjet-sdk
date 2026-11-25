<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ContactslistsignupIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'signuprequest_ID',
];

    /**
     * Unique numeric ID assigned to this subscription request.
     */
    public int $signuprequest_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'signuprequest_ID' => is_int($value) ? $this->signuprequest_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
