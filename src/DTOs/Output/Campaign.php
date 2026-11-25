<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Campaign extends \MailjetSDK\DTOs\Base\Campaign
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Type of campaign:
     *
     * - `1` - Transactional
     * - `2` - Marketing
     * - `3` - Unknown
     *
     */
    public int $CampaignType;
    /**
     * Indicates whether click tracking has been enabled for this campaign (1) or not (2).
     *
     * @deprecated
     */
    public int $ClickTracked;
    /**
     * Timestamp indicating when the campaign was created.
     */
    public string $CreatedAt;
    /**
     * Custom unique tag for this campaign.
     */
    public string $CustomValue;
    /**
     * Unique numeric ID of the first sent message for this campaign.
     */
    public int $FirstMessageID;
    /**
     * Sender email address for this campaign.
     */
    public string $FromEmail;
    /**
     * Unique numeric ID for the sender email address.
     */
    public int $FromID;
    /**
     * Sender name selected for this campaign.
     */
    public string $FromName;
    /**
     * Indicates whether the emails in this campaign have HTML content (1) or not (0).
     */
    public int $HasHtmlCount;
    /**
     * Indicates whether the emails in this campaign have plain text content (1) or not (0).
     */
    public int $HasTxtCount;
    /**
     * Unique numeric ID of this campaign.
     */
    public int $ID;
    /**
     * Unique numeric ID of the contact list, to which this campaign was sent.
     */
    public int $ListID;
    /**
     * Unique numeric ID of this campaign draft object linked to this campaign.
     */
    public int $NewsLetterID;
    /**
     * Indicates whether click tracking has been enabled for this campaign (1) or not (2).
     *
     * @deprecated
     */
    public int $OpenTracked;
    /**
     * Unique numeric ID for the segmentation used for this campaign (see `/contactfilter`). Returned only if a segmentation is used for the campaign.
     */
    public int $SegmentationID;
    /**
     * Timestamp indicating when last message in this campaign was sent.
     */
    public string $SendEndAt;
    /**
     * Timestamp indicating when first message in this campaign was sent.
     */
    public string $SendStartAt;
    /**
     * SpamAssassin score for this campaign.
     */
    public float $SpamassScore;
    /**
     * Status of this campaign.
     *
     * @deprecated
     */
    public int $Status;
    /**
     * Subject line used for the emails in this campaign.
     */
    public string $Subject;
    /**
     * Indicates whether unsubscribe tracking has been enabled for this campaign (1) or not (0).
     *
     * @deprecated
     */
    public int $UnsubscribeTrackedCount;
    /**
     * Unique numeric ID of the automation workflow that triggered this campaign. Returned only if a workflow is used for the campaign.
     */
    public int $WorkflowID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CampaignType' => is_int($value) ? $this->CampaignType = $value : parent::assignMember($name, $value),
            'ClickTracked' => is_int($value) ? $this->ClickTracked = $value : parent::assignMember($name, $value),
            'CreatedAt' => is_string($value) ? $this->CreatedAt = $value : parent::assignMember($name, $value),
            'CustomValue' => is_string($value) ? $this->CustomValue = $value : parent::assignMember($name, $value),
            'FirstMessageID' => is_int($value) ? $this->FirstMessageID = $value : parent::assignMember($name, $value),
            'FromEmail' => is_string($value) ? $this->FromEmail = $value : parent::assignMember($name, $value),
            'FromID' => is_int($value) ? $this->FromID = $value : parent::assignMember($name, $value),
            'FromName' => is_string($value) ? $this->FromName = $value : parent::assignMember($name, $value),
            'HasHtmlCount' => is_int($value) ? $this->HasHtmlCount = $value : parent::assignMember($name, $value),
            'HasTxtCount' => is_int($value) ? $this->HasTxtCount = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'ListID' => is_int($value) ? $this->ListID = $value : parent::assignMember($name, $value),
            'NewsLetterID' => is_int($value) ? $this->NewsLetterID = $value : parent::assignMember($name, $value),
            'OpenTracked' => is_int($value) ? $this->OpenTracked = $value : parent::assignMember($name, $value),
            'SegmentationID' => is_int($value) ? $this->SegmentationID = $value : parent::assignMember($name, $value),
            'SendEndAt' => is_string($value) ? $this->SendEndAt = $value : parent::assignMember($name, $value),
            'SendStartAt' => is_string($value) ? $this->SendStartAt = $value : parent::assignMember($name, $value),
            'SpamassScore' => is_float($value) ? $this->SpamassScore = $value : parent::assignMember($name, $value),
            'Status' => is_int($value) ? $this->Status = $value : parent::assignMember($name, $value),
            'Subject' => is_string($value) ? $this->Subject = $value : parent::assignMember($name, $value),
            'UnsubscribeTrackedCount' => is_int($value) ? $this->UnsubscribeTrackedCount = $value : parent::assignMember($name, $value),
            'WorkflowID' => is_int($value) ? $this->WorkflowID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
