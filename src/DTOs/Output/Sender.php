<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Sender extends \MailjetSDK\DTOs\Base\Sender
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Timestamp indicating when this sender object was created.
     */
    public string $CreatedAt;
    /**
     * Unique numeric ID of the DNS domain to which sender belongs. When the sender is inactive, the DNSID will return a `-1` value.
     */
    public int $DNSID;
    /**
     * The email address or domain for this sender.
     */
    public string $Email;
    /**
     * Filename expected on the domain name webserver. Will only return a value when a sender domain is registered. Used to validate the sender via the `/sender/{sender_id}/validate` resource.
     */
    public string $Filename;
    /**
     * Unique numeric ID of this sender.
     */
    public int $ID;
    /**
     * The status of this sender.
     *
     * Possible values:
     *
     * - `Inactive`
     * - `Active`
     * - `Deleted`
     *
     */
    public string $Status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CreatedAt' => is_string($value) ? $this->CreatedAt = $value : parent::assignMember($name, $value),
            'DNSID' => is_int($value) ? $this->DNSID = $value : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'Filename' => is_string($value) ? $this->Filename = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
