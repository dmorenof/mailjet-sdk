<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class SendAPIv3Send extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The email address for the recipient of this message.
     */
    public string $Email;
    /**
     * Unique numeric ID of this message.
     */
    public int $MessageID;
    /**
     * A 128-bit universally unique identifier (UUID) for this message.
     */
    public string $MessageUUID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'MessageID' => is_int($value) ? $this->MessageID = $value : parent::assignMember($name, $value),
            'MessageUUID' => is_string($value) ? $this->MessageUUID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
