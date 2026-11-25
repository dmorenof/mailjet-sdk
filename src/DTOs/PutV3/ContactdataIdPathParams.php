<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\PutV3;

final class ContactdataIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contact_ID',
    ];

    /**
     * Unique numeric ID for the contact, whose properties you want to update.
     */
    public int $contact_ID;
    /**
     * The email address of the contact, whose properties you want to update. Must be URL encoded. Can be used as an alternative to `contact_ID`.
     */
    public string $contact_email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contact_ID' => is_int($value) ? $this->contact_ID = $value : parent::assignMember($name, $value),
            'contact_email' => is_string($value) ? $this->contact_email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
