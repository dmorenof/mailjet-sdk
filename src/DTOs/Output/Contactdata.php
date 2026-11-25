<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Contactdata extends \MailjetSDK\DTOs\Base\Contactdata
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Unique numeric ID for this contact.
     */
    public int $ContactID;
    /**
     * Unique numeric ID for this contact's Data object. ID value will always equal the value of `ContactID`.
     */
    public int $ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ContactID' => is_int($value) ? $this->ContactID = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
