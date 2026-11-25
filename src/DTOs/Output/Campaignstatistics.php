<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Campaignstatistics extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique numeric ID of the AX Testing object this campaign is linked to.
     */
    public \MailjetSDK\DTOs\Output\Campaignstatistics\AXTestingIDDTO $AXTestingID;
    /**
     * Number of blocked messages.
     */
    public int $BlockedCount;
    /**
     * Number of bounced messages.
     */
    public int $BouncedCount;
    /**
     * Unique numeric ID of this campaign.
     */
    public int $CampaignID;
    /**
     * Indicates whether this campaign is marked as Starred or not.
     */
    public bool $CampaignIsStarred;
    /**
     * Timestamp indicating when the first message in this campaign was sent out.
     */
    public string $CampaignSendStartAt;
    /**
     * The email subject line used for this campaign.
     */
    public string $CampaignSubject;
    /**
     * Number of clicked messages.
     */
    public int $ClickedCount;
    /**
     * The name of the contact list, to whic the campaign was sent. Only returned when the `ShowExtraData` query parameter is `True`.
     */
    public string $ContactListName;
    /**
     * Number of deferred messages.
     */
    public int $DeferredCount;
    /**
     * Number of delivered messages.
     */
    public int $DeliveredCount;
    /**
     * Number of hard-bounced messages.
     */
    public int $HardbouncedCount;
    /**
     * Timestamp indicating the last registered activity for this Campaign.
     */
    public string $LastActivityAt;
    /**
     * Unique numeric ID of the draft linked to this campaign.
     */
    public int $NewsLetterID;
    /**
     * Number of opened messages.
     */
    public int $OpenedCount;
    /**
     * Number of pre-queued messages.
     */
    public int $PreQueuedCount;
    /**
     * Total number of messages processed by Mailjet.
     */
    public int $ProcessedCount;
    /**
     * Number of queued messages.
     */
    public int $QueuedCount;
    /**
     * The name of Unique the segmentation used for this campaign (see `/contactfilter`). Only returned when the `ShowExtraData` query parameter is `True`.
     */
    public string $SegmentName;
    /**
     * Number of soft-bounced messages.
     */
    public int $SoftbouncedCount;
    /**
     * Number of messages marked as spam.
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
    /**
     * Unique numeric ID of the automation workflow that triggered this campaign.
     */
    public int $WorkflowID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'BlockedCount' => is_int($value) ? $this->BlockedCount = $value : parent::assignMember($name, $value),
            'BouncedCount' => is_int($value) ? $this->BouncedCount = $value : parent::assignMember($name, $value),
            'CampaignID' => is_int($value) ? $this->CampaignID = $value : parent::assignMember($name, $value),
            'CampaignIsStarred' => is_bool($value) ? $this->CampaignIsStarred = $value : parent::assignMember($name, $value),
            'CampaignSendStartAt' => is_string($value) ? $this->CampaignSendStartAt = $value : parent::assignMember($name, $value),
            'CampaignSubject' => is_string($value) ? $this->CampaignSubject = $value : parent::assignMember($name, $value),
            'ClickedCount' => is_int($value) ? $this->ClickedCount = $value : parent::assignMember($name, $value),
            'ContactListName' => is_string($value) ? $this->ContactListName = $value : parent::assignMember($name, $value),
            'DeferredCount' => is_int($value) ? $this->DeferredCount = $value : parent::assignMember($name, $value),
            'DeliveredCount' => is_int($value) ? $this->DeliveredCount = $value : parent::assignMember($name, $value),
            'HardbouncedCount' => is_int($value) ? $this->HardbouncedCount = $value : parent::assignMember($name, $value),
            'LastActivityAt' => is_string($value) ? $this->LastActivityAt = $value : parent::assignMember($name, $value),
            'NewsLetterID' => is_int($value) ? $this->NewsLetterID = $value : parent::assignMember($name, $value),
            'OpenedCount' => is_int($value) ? $this->OpenedCount = $value : parent::assignMember($name, $value),
            'PreQueuedCount' => is_int($value) ? $this->PreQueuedCount = $value : parent::assignMember($name, $value),
            'ProcessedCount' => is_int($value) ? $this->ProcessedCount = $value : parent::assignMember($name, $value),
            'QueuedCount' => is_int($value) ? $this->QueuedCount = $value : parent::assignMember($name, $value),
            'SegmentName' => is_string($value) ? $this->SegmentName = $value : parent::assignMember($name, $value),
            'SoftbouncedCount' => is_int($value) ? $this->SoftbouncedCount = $value : parent::assignMember($name, $value),
            'SpamComplaintCount' => is_int($value) ? $this->SpamComplaintCount = $value : parent::assignMember($name, $value),
            'UnsubscribedCount' => is_int($value) ? $this->UnsubscribedCount = $value : parent::assignMember($name, $value),
            'WorkFlowExitedCount' => is_int($value) ? $this->WorkFlowExitedCount = $value : parent::assignMember($name, $value),
            'WorkflowID' => is_int($value) ? $this->WorkflowID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
