<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\PutV3;

final class ListrecipientIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'listrecipient_ID',
];

    /**
     * Unique numeric ID of the list recipient.
     */
    public int $listrecipient_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'listrecipient_ID' => is_int($value) ? $this->listrecipient_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
