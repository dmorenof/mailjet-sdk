<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewCsvimport extends \MailjetSDK\DTOs\Base\Csvimport
{
    public const array REQUIRED_FIELDS = [
    'ContactsListID',
    'DataID',
];

    /**
     * Unique numeric ID of the list, where you want to use the uploaded CSV data. Interchangeable with ContactsListAlt.
     *
     * > Note: `ContactsListID` should **not** be added to the input payload, if `Method` is set to `includemarketing` or `excludemarketing`.
     *
     */
    public int $ContactsListID;
    /**
     * Unique numeric ID of the CSV data you want to use.
     */
    public int $DataID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ContactsListID' => is_int($value) ? $this->ContactsListID = $value : parent::assignMember($name, $value),
            'DataID' => is_int($value) ? $this->DataID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
