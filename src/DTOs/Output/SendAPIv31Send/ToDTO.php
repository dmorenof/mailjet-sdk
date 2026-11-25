<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output\SendAPIv31Send;

final class ToDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
    'Email',
    'MessageHref',
    'MessageID',
    'MessageUUID',
];

    /**
     * The email address of this recipient.
     * Format: email
     */
    public string $Email;
    /**
     * URL link that can be used for an API call to retrieve more information about this message.
     */
    public string $MessageHref;
    /**
     * Unique numeric ID of this message.
     * Format: int64
     */
    public int $MessageID;
    /**
     * A 128-bit universally unique identifier (UUID) for this message.
     * Format: UUID
     */
    public string $MessageUUID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'MessageHref' => is_string($value) ? $this->MessageHref = $value : parent::assignMember($name, $value),
            'MessageID' => is_int($value) ? $this->MessageID = $value : parent::assignMember($name, $value),
            'MessageUUID' => is_string($value) ? $this->MessageUUID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
