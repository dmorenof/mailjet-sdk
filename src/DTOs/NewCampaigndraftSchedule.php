<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewCampaigndraftSchedule extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Date',
];

    /**
     * The timestamp, when the campaign draft will be sent out. Use `Now` to send immediately. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $Date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Date' => is_string($value) ? $this->Date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
