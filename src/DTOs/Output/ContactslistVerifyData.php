<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class ContactslistVerifyData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The api key id associated with the verification request job.
     */
    public int $Akid;
    /**
     * The contact list id with contacts to be verified in the request.
     */
    public int $ContactListID;
    /**
     * The number of contacts in the verification job that have thus far been processed.
     */
    public int $Count;
    /**
     * A resulting error message to provide context for non-success jobs.
     */
    public string $Error;
    /**
     * The job id associated with the verification request.
     */
    public int $ID;
    /**
     * The time at which the job completed processing.
     */
    public string $JobEnd;
    /**
     * The time at which the job started processing.
     */
    public string $JobStart;
    /**
     * The requested method of verification to perform on the list.
     */
    public string $Method;
    /**
     * A url where detailed responses can be downloaded.
     */
    public string $ResponseURL;
    /**
     * The current status of the job.
     */
    public string $Status;
    /**
     * Aggregated results from the outcome of the verification job processing. This will update as the job processes.
     */
    public \MailjetSDK\DTOs\Output\ContactslistVerifyData\SummaryDTO $Summary;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Akid' => is_int($value) ? $this->Akid = $value : parent::assignMember($name, $value),
            'ContactListID' => is_int($value) ? $this->ContactListID = $value : parent::assignMember($name, $value),
            'Count' => is_int($value) ? $this->Count = $value : parent::assignMember($name, $value),
            'Error' => is_string($value) ? $this->Error = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'JobEnd' => is_string($value) ? $this->JobEnd = $value : parent::assignMember($name, $value),
            'JobStart' => is_string($value) ? $this->JobStart = $value : parent::assignMember($name, $value),
            'Method' => is_string($value) ? $this->Method = $value : parent::assignMember($name, $value),
            'ResponseURL' => is_string($value) ? $this->ResponseURL = $value : parent::assignMember($name, $value),
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
