<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class SenderstatisticsIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'sender_ID',
];

    /**
     * Unique numeric ID of the sender you want to retrieve statistics for.
     */
    public int $sender_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sender_ID' => is_int($value) ? $this->sender_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
