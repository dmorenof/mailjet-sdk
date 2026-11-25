<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class SenderIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'sender_ID',
];

    /**
     * Unique numeric ID of the sender you want to retrieve details about.
     */
    public int $sender_ID;
    /**
     * The email address of the sender object you want to retrieve. Can be used as an alternative to `sender_ID`.
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
