<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Csvimport extends \MailjetSDK\DTOs\Base\Csvimport
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Timestamp indicating when the CSV import background job reported a status. Returns an empty value upon initial `POST` request.
     */
    public string $AliveAt;
    /**
     * Unique numeric ID of the list, where you want to use the uploaded CSV data.
     */
    public int $ContactsListID;
    /**
     * Number of contacts detected in the CSV file. Returns 0 value upon initial `POST` request.
     */
    public int $Count;
    /**
     * Number of processed contacts so far. Returns 0 value upon initial `POST` request.
     */
    public int $Current;
    /**
     * Unique numeric ID of the CSV data used for this request.
     */
    public int $DataID;
    /**
     * Number of errors encountered while processing the contacts in the CSV file. Returns 0 value upon initial `POST` request.
     */
    public int $Errcount;
    /**
     * Unique numeric ID of this import job.
     */
    public int $ID;
    /**
     * Timestamp indicating when the import job has ended. Returns an empty value upon initial `POST` request.
     */
    public string $JobEnd;
    /**
     * Timestamp indicating when the import job was started. Returns an empty value upon initial `POST` request.
     */
    public string $JobStart;
    /**
     * Timestamp indicating when the import job was requested. Returns an empty value upon initial `POST` request.
     */
    public string $RequestAt;
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
            'AliveAt' => is_string($value) ? $this->AliveAt = $value : parent::assignMember($name, $value),
            'ContactsListID' => is_int($value) ? $this->ContactsListID = $value : parent::assignMember($name, $value),
            'Count' => is_int($value) ? $this->Count = $value : parent::assignMember($name, $value),
            'Current' => is_int($value) ? $this->Current = $value : parent::assignMember($name, $value),
            'DataID' => is_int($value) ? $this->DataID = $value : parent::assignMember($name, $value),
            'Errcount' => is_int($value) ? $this->Errcount = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'JobEnd' => is_string($value) ? $this->JobEnd = $value : parent::assignMember($name, $value),
            'JobStart' => is_string($value) ? $this->JobStart = $value : parent::assignMember($name, $value),
            'RequestAt' => is_string($value) ? $this->RequestAt = $value : parent::assignMember($name, $value),
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
