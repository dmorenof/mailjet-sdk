<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ListstatisticsIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'list_ID',
];

    /**
     * Unique numeric ID assigned to this contact list.
     */
    public int $list_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'list_ID' => is_int($value) ? $this->list_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
