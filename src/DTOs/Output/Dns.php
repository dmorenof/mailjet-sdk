<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Dns extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Name of the DNS DKIM record to insert for this domain.
     */
    public string $DKIMRecordName;
    /**
     * Value to insert in the DNS DKIM record for this domain.
     */
    public string $DKIMRecordValue;
    /**
     * The status of the last domain DKIM configuration check.
     *
     * Possible values:
     *
     * - `OK`
     * - `Error`
     * - `Not checked`
     *
     */
    public string $DKIMStatus;
    /**
     * The name of the domain linked to this DNS record.
     */
    public string $Domain;
    /**
     * Unique numeric ID for this DNS record.
     */
    public int $ID;
    /**
     * Indicates whether there is a check in progress for this domain or not.
     */
    public bool $IsCheckInProgress;
    /**
     * Timestamp for the last check performed for this domain.
     */
    public string $LastCheckAt;
    /**
     * Value of the token to verify the ownership of the domain.
     */
    public string $OwnerShipToken;
    /**
     * Value to use when configuring the TXT record (DNS) verification for the domain.
     */
    public string $OwnerShipTokenRecordName;
    /**
     * Value to insert in the DNS SPF record for this domain.
     */
    public string $SPFRecordValue;
    /**
     * SPF status.
     *
     * Possible values:
     *
     * - `OK`
     * - `Error`
     * - `Not checked`
     * - `Not found`
     *
     */
    public string $SPFStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'DKIMRecordName' => is_string($value) ? $this->DKIMRecordName = $value : parent::assignMember($name, $value),
            'DKIMRecordValue' => is_string($value) ? $this->DKIMRecordValue = $value : parent::assignMember($name, $value),
            'DKIMStatus' => is_string($value) ? $this->DKIMStatus = $value : parent::assignMember($name, $value),
            'Domain' => is_string($value) ? $this->Domain = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'IsCheckInProgress' => is_bool($value) ? $this->IsCheckInProgress = $value : parent::assignMember($name, $value),
            'LastCheckAt' => is_string($value) ? $this->LastCheckAt = $value : parent::assignMember($name, $value),
            'OwnerShipToken' => is_string($value) ? $this->OwnerShipToken = $value : parent::assignMember($name, $value),
            'OwnerShipTokenRecordName' => is_string($value) ? $this->OwnerShipTokenRecordName = $value : parent::assignMember($name, $value),
            'SPFRecordValue' => is_string($value) ? $this->SPFRecordValue = $value : parent::assignMember($name, $value),
            'SPFStatus' => is_string($value) ? $this->SPFStatus = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
