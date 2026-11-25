<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Senderstatistics extends \Dmorenof\SdkRuntime\DTO
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
     * Number of clicked messages.
     */
    public int $ClickedCount;
    /**
     * Number of deferred messages - ones that could not be delivered and the system is retrying to send. If after 3 days the sending is unsuccessful, those messages become soft-bounced.
     */
    public int $DeferredCount;
    /**
     * Number of messages delivered to their destination.
     */
    public int $DeliveredCount;
    /**
     * Number of hard-bounced messages.
     */
    public int $HardBouncedCount;
    /**
     * Timestamp indicating the last registered activity linked to messages sent by this sender.
     */
    public string $LastActivityAt;
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
     * Unique numeric ID for this sender.
     */
    public int $SenderID;
    /**
     * Number of soft-bounced messages.
     */
    public int $SoftbouncedCount;
    /**
     * Number of messages marked as Spam by the recipients.
     */
    public int $SpamComplaintCount;
    /**
     * Number of registered unsubscribe requests.
     */
    public int $UnsubscribedCount;
    /**
     * Number of registered automation workflow exits.
     */
    public int $WorkFlowExitedCount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'BlockedCount' => is_int($value) ? $this->BlockedCount = $value : parent::assignMember($name, $value),
            'BouncedCount' => is_int($value) ? $this->BouncedCount = $value : parent::assignMember($name, $value),
            'ClickedCount' => is_int($value) ? $this->ClickedCount = $value : parent::assignMember($name, $value),
            'DeferredCount' => is_int($value) ? $this->DeferredCount = $value : parent::assignMember($name, $value),
            'DeliveredCount' => is_int($value) ? $this->DeliveredCount = $value : parent::assignMember($name, $value),
            'HardBouncedCount' => is_int($value) ? $this->HardBouncedCount = $value : parent::assignMember($name, $value),
            'LastActivityAt' => is_string($value) ? $this->LastActivityAt = $value : parent::assignMember($name, $value),
            'OpenedCount' => is_int($value) ? $this->OpenedCount = $value : parent::assignMember($name, $value),
            'PreQueuedCount' => is_int($value) ? $this->PreQueuedCount = $value : parent::assignMember($name, $value),
            'ProcessedCount' => is_int($value) ? $this->ProcessedCount = $value : parent::assignMember($name, $value),
            'QueuedCount' => is_int($value) ? $this->QueuedCount = $value : parent::assignMember($name, $value),
            'SenderID' => is_int($value) ? $this->SenderID = $value : parent::assignMember($name, $value),
            'SoftbouncedCount' => is_int($value) ? $this->SoftbouncedCount = $value : parent::assignMember($name, $value),
            'SpamComplaintCount' => is_int($value) ? $this->SpamComplaintCount = $value : parent::assignMember($name, $value),
            'UnsubscribedCount' => is_int($value) ? $this->UnsubscribedCount = $value : parent::assignMember($name, $value),
            'WorkFlowExitedCount' => is_int($value) ? $this->WorkFlowExitedCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
