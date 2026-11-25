<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class ContactslistManageManyContacts extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A JSON array, containing information about the contact list and the actions performed for it.
     */
    public \MailjetSDK\Collections\Output\ContactslistManageManyContacts\ContactsListsCollection $ContactsLists;
    /**
     * Number of contacts processed by this request.
     */
    public int $Count;
    /**
     * Indicates what kind of errors came up during the processing of this job, if any.
     */
    public string $Error;
    /**
     * URL link to the file describing the the types of errors that came up during this job, if any.
     */
    public string $ErrorFile;
    /**
     * Timestamp indicating when this job request was completed.
     */
    public string $JobEnd;
    /**
     * Timestamp indicating when this job request was started.
     */
    public string $JobStart;
    /**
     * The status of this job request:
     *
     *   * Completed
     *   * In Progress
     *   * Error
     *
     */
    public string $Status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Count' => is_int($value) ? $this->Count = $value : parent::assignMember($name, $value),
            'Error' => is_string($value) ? $this->Error = $value : parent::assignMember($name, $value),
            'ErrorFile' => is_string($value) ? $this->ErrorFile = $value : parent::assignMember($name, $value),
            'JobEnd' => is_string($value) ? $this->JobEnd = $value : parent::assignMember($name, $value),
            'JobStart' => is_string($value) ? $this->JobStart = $value : parent::assignMember($name, $value),
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
