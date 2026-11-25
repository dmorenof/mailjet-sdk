<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Statcounters extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique numeric ID for this API Key.
     */
    public int $APIKeyID;
    /**
     * Total click delay (in seconds). Equals the sum of delays between the sending timestamp and click timestamp for all clicked messages (only taking into account the first click).
     */
    public int $EventClickDelay;
    /**
     * Total number of click events.
     */
    public int $EventClickedCount;
    /**
     * Total Open delay (in seconds). Equals the sum of delays between the sending timestamp and open timestamp for all opened messages (only taking into account the first open).
     */
    public int $EventOpenDelay;
    /**
     * Total number of open events.
     */
    public int $EventOpenedCount;
    /**
     * Total number of spam reports.
     */
    public int $EventSpamCount;
    /**
     * Total number of unsubscriptions.
     */
    public int $EventUnsubscribedCount;
    /**
     * Total number of workflow exits.
     */
    public int $EventWorkflowExitedCount;
    /**
     * Number of blocked messages.
     */
    public int $MessageBlockedCount;
    /**
     * Number of clicked messages.
     */
    public int $MessageClickedCount;
    /**
     * Number of deferred messages.
     */
    public int $MessageDeferredCount;
    /**
     * Number of hard-bounced messages.
     */
    public int $MessageHardBouncedCount;
    /**
     * Number of opened messages.
     */
    public int $MessageOpenedCount;
    /**
     * Number of queued messages.
     */
    public int $MessageQueuedCount;
    /**
     * Number of sent messages.
     */
    public int $MessageSentCount;
    /**
     * Number of soft-bounced messages.
     */
    public int $MessageSoftBouncedCount;
    /**
     * Number of messages marked as spam.
     */
    public int $MessageSpamCount;
    /**
     * Number of messages with unsubscribe requests.
     */
    public int $MessageUnsubscribedCount;
    /**
     * Number of contacts that exited a workflow.
     */
    public int $MessageWorkFlowExitedCount;
    /**
     * Unique numeric ID for a campaign, contact list or sender email address. Will indicate a campaign ID when `CounterSource=Campaign`, a list ID when `CounterSource=List` or a sender ID when `CounterSource=Sender`.
     */
    public int $SourceID;
    /**
     * Timestamp for when the count was registered. Depends on the value selected for `CounterResolution`.
     */
    public string $Timeslice;
    /**
     * Total number of processed messages.
     */
    public int $Total;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'APIKeyID' => is_int($value) ? $this->APIKeyID = $value : parent::assignMember($name, $value),
            'EventClickDelay' => is_int($value) ? $this->EventClickDelay = $value : parent::assignMember($name, $value),
            'EventClickedCount' => is_int($value) ? $this->EventClickedCount = $value : parent::assignMember($name, $value),
            'EventOpenDelay' => is_int($value) ? $this->EventOpenDelay = $value : parent::assignMember($name, $value),
            'EventOpenedCount' => is_int($value) ? $this->EventOpenedCount = $value : parent::assignMember($name, $value),
            'EventSpamCount' => is_int($value) ? $this->EventSpamCount = $value : parent::assignMember($name, $value),
            'EventUnsubscribedCount' => is_int($value) ? $this->EventUnsubscribedCount = $value : parent::assignMember($name, $value),
            'EventWorkflowExitedCount' => is_int($value) ? $this->EventWorkflowExitedCount = $value : parent::assignMember($name, $value),
            'MessageBlockedCount' => is_int($value) ? $this->MessageBlockedCount = $value : parent::assignMember($name, $value),
            'MessageClickedCount' => is_int($value) ? $this->MessageClickedCount = $value : parent::assignMember($name, $value),
            'MessageDeferredCount' => is_int($value) ? $this->MessageDeferredCount = $value : parent::assignMember($name, $value),
            'MessageHardBouncedCount' => is_int($value) ? $this->MessageHardBouncedCount = $value : parent::assignMember($name, $value),
            'MessageOpenedCount' => is_int($value) ? $this->MessageOpenedCount = $value : parent::assignMember($name, $value),
            'MessageQueuedCount' => is_int($value) ? $this->MessageQueuedCount = $value : parent::assignMember($name, $value),
            'MessageSentCount' => is_int($value) ? $this->MessageSentCount = $value : parent::assignMember($name, $value),
            'MessageSoftBouncedCount' => is_int($value) ? $this->MessageSoftBouncedCount = $value : parent::assignMember($name, $value),
            'MessageSpamCount' => is_int($value) ? $this->MessageSpamCount = $value : parent::assignMember($name, $value),
            'MessageUnsubscribedCount' => is_int($value) ? $this->MessageUnsubscribedCount = $value : parent::assignMember($name, $value),
            'MessageWorkFlowExitedCount' => is_int($value) ? $this->MessageWorkFlowExitedCount = $value : parent::assignMember($name, $value),
            'SourceID' => is_int($value) ? $this->SourceID = $value : parent::assignMember($name, $value),
            'Timeslice' => is_string($value) ? $this->Timeslice = $value : parent::assignMember($name, $value),
            'Total' => is_int($value) ? $this->Total = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
