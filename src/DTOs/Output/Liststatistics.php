<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Liststatistics extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Deprecated - Number of active list members.
     *
     * @deprecated
     */
    public int $ActiveCount;
    /**
     * Deprecated - Total number of active contacts excluded from campaigns.
     *
     * @deprecated
     */
    public int $ActiveExcludedSubscriberCount;
    /**
     * Deprecated - Number of registered unsubscribe requests.
     *
     * @deprecated
     */
    public int $ActiveUnsubscribedCount;
    /**
     * Number of blocked messages.
     */
    public int $BlockedCount;
    /**
     * Number of bounced messages.
     */
    public int $BouncedCount;
    /**
     * Number of clicked messages.
     */
    public int $ClickedCount;
    /**
     * Timestamp indicating when the contact list was created.
     */
    public string $CreatedAt;
    /**
     * Number of deferred messages - ones that could not be delivered and the system is retrying to send. If after 3 days the sending is unsuccessful, those messages become soft-bounced.
     */
    public int $DeferredCount;
    /**
     * Number of messages delivered to their destination.
     */
    public int $DeliveredCount;
    /**
     * Number of list members that have been excluded from campaigns. Only calculated when `CalcExcludedSubscriber` is specified as `True` in the query.
     */
    public int $ExcludedSubscriberCount;
    /**
     * Number of hard-bounced messages.
     */
    public int $HardbouncedCount;
    /**
     * Unique numeric ID assigned to this contact list.
     */
    public int $ID;
    /**
     * Indicates whether this list is deleted or not.
     */
    public bool $IsDeleted;
    /**
     * Timestamp indicating the last registered activity for this contact list.
     */
    public string $LastActivityAt;
    /**
     * User-specified name for this contact list (must be unique).
     */
    public string $Name;
    /**
     * Number of opened messages.
     */
    public int $OpenedCount;
    /**
     * Number of pre-queued messages.
     */
    public int $PreQueuedCount;
    /**
     * Number of processed messages.
     */
    public int $ProcessedCount;
    /**
     * Number of queued messages.
     */
    public int $QueuedCount;
    /**
     * Number of soft-bounced messages.
     */
    public int $SoftbouncedCount;
    /**
     * Number of messages marked as Spam by the recipients.
     */
    public int $SpamComplaintCount;
    /**
     * Number of subscribers.
     */
    public int $SubscriberCount;
    /**
     * Number of contacts registered in this contact list. Includes contacts that were unsubscribed from the list, as well as ones that are excluded from campaigns.
     */
    public int $UnsubscribedCount;
    /**
     * Number of registered automation workflow exits.
     */
    public int $WorkFlowExitedCount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ActiveCount' => is_int($value) ? $this->ActiveCount = $value : parent::assignMember($name, $value),
            'ActiveExcludedSubscriberCount' => is_int($value) ? $this->ActiveExcludedSubscriberCount = $value : parent::assignMember($name, $value),
            'ActiveUnsubscribedCount' => is_int($value) ? $this->ActiveUnsubscribedCount = $value : parent::assignMember($name, $value),
            'BlockedCount' => is_int($value) ? $this->BlockedCount = $value : parent::assignMember($name, $value),
            'BouncedCount' => is_int($value) ? $this->BouncedCount = $value : parent::assignMember($name, $value),
            'ClickedCount' => is_int($value) ? $this->ClickedCount = $value : parent::assignMember($name, $value),
            'CreatedAt' => is_string($value) ? $this->CreatedAt = $value : parent::assignMember($name, $value),
            'DeferredCount' => is_int($value) ? $this->DeferredCount = $value : parent::assignMember($name, $value),
            'DeliveredCount' => is_int($value) ? $this->DeliveredCount = $value : parent::assignMember($name, $value),
            'ExcludedSubscriberCount' => is_int($value) ? $this->ExcludedSubscriberCount = $value : parent::assignMember($name, $value),
            'HardbouncedCount' => is_int($value) ? $this->HardbouncedCount = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'IsDeleted' => is_bool($value) ? $this->IsDeleted = $value : parent::assignMember($name, $value),
            'LastActivityAt' => is_string($value) ? $this->LastActivityAt = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'OpenedCount' => is_int($value) ? $this->OpenedCount = $value : parent::assignMember($name, $value),
            'PreQueuedCount' => is_int($value) ? $this->PreQueuedCount = $value : parent::assignMember($name, $value),
            'ProcessedCount' => is_int($value) ? $this->ProcessedCount = $value : parent::assignMember($name, $value),
            'QueuedCount' => is_int($value) ? $this->QueuedCount = $value : parent::assignMember($name, $value),
            'SoftbouncedCount' => is_int($value) ? $this->SoftbouncedCount = $value : parent::assignMember($name, $value),
            'SpamComplaintCount' => is_int($value) ? $this->SpamComplaintCount = $value : parent::assignMember($name, $value),
            'SubscriberCount' => is_int($value) ? $this->SubscriberCount = $value : parent::assignMember($name, $value),
            'UnsubscribedCount' => is_int($value) ? $this->UnsubscribedCount = $value : parent::assignMember($name, $value),
            'WorkFlowExitedCount' => is_int($value) ? $this->WorkFlowExitedCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
