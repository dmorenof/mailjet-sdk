<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class DnsCheck extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * DKIM configuration errors found for this domain.
     */
    public string $DKIMErrors;
    /**
     * Mailjet's DKIM record found for this domain.
     */
    public string $DKIMRecordCurrentValue;
    /**
     * DKIM configuration status.
     *
     * Possible values:
     *
     * - `OK`
     * - `Error`
     *
     */
    public string $DKIMStatus;
    /**
     * SPF configuration errors found for this domain.
     */
    public string $SPFErrors;
    /**
     * Mailjet's SPF record found for this domain.
     */
    public string $SPFRecordCurrentValue;
    /**
     * SPF configuration status.
     *
     * Possible values:
     *
     * - `OK`
     * - `Error`
     *
     */
    public string $SPFStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'DKIMErrors' => is_string($value) ? $this->DKIMErrors = $value : parent::assignMember($name, $value),
            'DKIMRecordCurrentValue' => is_string($value) ? $this->DKIMRecordCurrentValue = $value : parent::assignMember($name, $value),
            'DKIMStatus' => is_string($value) ? $this->DKIMStatus = $value : parent::assignMember($name, $value),
            'SPFErrors' => is_string($value) ? $this->SPFErrors = $value : parent::assignMember($name, $value),
            'SPFRecordCurrentValue' => is_string($value) ? $this->SPFRecordCurrentValue = $value : parent::assignMember($name, $value),
            'SPFStatus' => is_string($value) ? $this->SPFStatus = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
