<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class CsvimportIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'importjob_ID',
];

    /**
     * Unique numeric ID of the import job you want to retrieve.
     */
    public int $importjob_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'importjob_ID' => is_int($value) ? $this->importjob_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
