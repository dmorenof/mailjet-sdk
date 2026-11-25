<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ContactIdGetcontactslistsPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'contact_ID',
];

    /**
     * Unique numeric ID of the contact you want to retrieve the contact lists for.
     */
    public int $contact_ID;
    /**
     * The email address of the contact your want to retrieve the contact lists for. Must be URL encoded. Can be used as an alternative to `contact_ID`.
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
