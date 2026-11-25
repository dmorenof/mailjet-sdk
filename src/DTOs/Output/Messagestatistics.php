<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Messagestatistics extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Average delay (in seconds) between the first open and first click event for a message.
     */
    public float $AverageClickDelay;
    /**
     * Average number of times a click was registered for a message.
     */
    public float $AverageClickedCount;
    /**
     * Average delay (in seconds) between the message delivery and the first message open.
     */
    public float $AverageOpenDelay;
    /**
     * Average number of times a recipient opens the message.
     */
    public float $AverageOpenedCount;
    /**
     * Number of blocked messages.
     */
    public int $BlockedCount;
    /**
     * Number of bounced messages.
     */
    public int $BouncedCount;
    /**
     * Number of distinct campaigns that are part of these stats.
     */
    public int $CampaignCount;
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
    public int $HardbouncedCount;
    /**
     * Number of opened messages.
     */
    public int $OpenedCount;
    /**
     * Number of processed messages.
     */
    public int $ProcessedCount;
    /**
     * Number of messages that are in the queue to be sent out.
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
     * Total number of registered open events. Calculated only when the `ProcessTotalOpensCount` query parameter is set as `true`, otherwise 0 is returned.
     */
    public int $TotalClicksCount;
    /**
     * Total number of registered click events. Calculated only when the `ProcessTotalClicksCount` query parameter is set as `true`, otherwise 0 is returned.
     */
    public int $TotalOpensCount;
    /**
     * Number of transactional messages.
     */
    public int $TransactionalCount;
    /**
     * Number of registered unsubscribe requests.
     */
    public int $UnsubscribedCount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AverageClickDelay' => is_float($value) ? $this->AverageClickDelay = $value : parent::assignMember($name, $value),
            'AverageClickedCount' => is_float($value) ? $this->AverageClickedCount = $value : parent::assignMember($name, $value),
            'AverageOpenDelay' => is_float($value) ? $this->AverageOpenDelay = $value : parent::assignMember($name, $value),
            'AverageOpenedCount' => is_float($value) ? $this->AverageOpenedCount = $value : parent::assignMember($name, $value),
            'BlockedCount' => is_int($value) ? $this->BlockedCount = $value : parent::assignMember($name, $value),
            'BouncedCount' => is_int($value) ? $this->BouncedCount = $value : parent::assignMember($name, $value),
            'CampaignCount' => is_int($value) ? $this->CampaignCount = $value : parent::assignMember($name, $value),
            'ClickedCount' => is_int($value) ? $this->ClickedCount = $value : parent::assignMember($name, $value),
            'DeferredCount' => is_int($value) ? $this->DeferredCount = $value : parent::assignMember($name, $value),
            'DeliveredCount' => is_int($value) ? $this->DeliveredCount = $value : parent::assignMember($name, $value),
            'HardbouncedCount' => is_int($value) ? $this->HardbouncedCount = $value : parent::assignMember($name, $value),
            'OpenedCount' => is_int($value) ? $this->OpenedCount = $value : parent::assignMember($name, $value),
            'ProcessedCount' => is_int($value) ? $this->ProcessedCount = $value : parent::assignMember($name, $value),
            'QueuedCount' => is_int($value) ? $this->QueuedCount = $value : parent::assignMember($name, $value),
            'SoftbouncedCount' => is_int($value) ? $this->SoftbouncedCount = $value : parent::assignMember($name, $value),
            'SpamComplaintCount' => is_int($value) ? $this->SpamComplaintCount = $value : parent::assignMember($name, $value),
            'TotalClicksCount' => is_int($value) ? $this->TotalClicksCount = $value : parent::assignMember($name, $value),
            'TotalOpensCount' => is_int($value) ? $this->TotalOpensCount = $value : parent::assignMember($name, $value),
            'TransactionalCount' => is_int($value) ? $this->TransactionalCount = $value : parent::assignMember($name, $value),
            'UnsubscribedCount' => is_int($value) ? $this->UnsubscribedCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
