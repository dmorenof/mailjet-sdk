<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Update;

final class Csvimport extends \MailjetSDK\DTOs\Base\Csvimport
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Unique numeric ID of the list, where you want to use the uploaded CSV data.
     */
    public int $ContactsListID;
    /**
     * Unique numeric ID of the CSV data you want to use.
     */
    public int $DataID;
    /**
     * Current status of this import job. During `POST`, the only allowed value is `Upload`. During PUT, the only allowed value is `Abort`.
     *
     * Possible values:
     *
     * - `Upload`
     * - `Completed`
     * - `Abort`
     *
     */
    public string $Status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ContactsListID' => is_int($value) ? $this->ContactsListID = $value : parent::assignMember($name, $value),
            'DataID' => is_int($value) ? $this->DataID = $value : parent::assignMember($name, $value),
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
