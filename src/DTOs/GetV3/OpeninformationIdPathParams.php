<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class OpeninformationIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'message_ID',
];

    /**
     * Unique numeric ID of the message you want to retrieve the open event information about.
     */
    public int $message_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message_ID' => is_int($value) ? $this->message_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
