<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\PutV3;

final class ContactfilterIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contactfilter_ID',
    ];

    /**
     * Unique numeric ID for the segment you want to update.
     */
    public int $contactfilter_ID;
    /**
     * The user-selected name of the segment you want to update. Can be used as an alternative to `contactfilter_ID`.
     */
    public string $contactfilter_name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contactfilter_ID' => is_int($value) ? $this->contactfilter_ID = $value : parent::assignMember($name, $value),
            'contactfilter_name' => is_string($value) ? $this->contactfilter_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
