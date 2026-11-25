<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Domainstatistics extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Number of blocked messages.
     */
    public int $BlockedCount;
    /**
     * Number of bounced messages.
     */
    public int $BouncedCount;
    /**
     * Number of registered clicks.
     */
    public int $ClickedCount;
    /**
     * Number of messages delivered to their destination.
     */
    public int $DeliveredCount;
    /**
     * The name of the recipient domain.
     */
    public string $Domain;
    /**
     * Unique numeric ID for this domain name. Currently not returned by this endpoint.
     */
    public int $ID;
    /**
     * Number of opened messages.
     */
    public int $OpenedCount;
    /**
     * Number of processed messages.
     */
    public int $ProcessedCount;
    /**
     * Number of queued messages.
     */
    public int $QueuedCount;
    /**
     * Number of messages marked as Spam by the recipients.
     */
    public int $SpamComplaintCount;
    /**
     * Number of registered unsubscribe requests.
     */
    public int $UnsubscribedCount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'BlockedCount' => is_int($value) ? $this->BlockedCount = $value : parent::assignMember($name, $value),
            'BouncedCount' => is_int($value) ? $this->BouncedCount = $value : parent::assignMember($name, $value),
            'ClickedCount' => is_int($value) ? $this->ClickedCount = $value : parent::assignMember($name, $value),
            'DeliveredCount' => is_int($value) ? $this->DeliveredCount = $value : parent::assignMember($name, $value),
            'Domain' => is_string($value) ? $this->Domain = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'OpenedCount' => is_int($value) ? $this->OpenedCount = $value : parent::assignMember($name, $value),
            'ProcessedCount' => is_int($value) ? $this->ProcessedCount = $value : parent::assignMember($name, $value),
            'QueuedCount' => is_int($value) ? $this->QueuedCount = $value : parent::assignMember($name, $value),
            'SpamComplaintCount' => is_int($value) ? $this->SpamComplaintCount = $value : parent::assignMember($name, $value),
            'UnsubscribedCount' => is_int($value) ? $this->UnsubscribedCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
