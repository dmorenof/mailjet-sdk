<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\PostV3;

final class SenderIdValidatePathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'sender_ID',
];

    /**
     * Unique numeric ID for the sender you want to validate.
     */
    public int $sender_ID;
    /**
     * The email address of the sender object you want to validate. Can be used as an alternative to `sender_ID`.
     */
    public string $sender_email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sender_ID' => is_int($value) ? $this->sender_ID = $value : parent::assignMember($name, $value),
            'sender_email' => is_string($value) ? $this->sender_email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
