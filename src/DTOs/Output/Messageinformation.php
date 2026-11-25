<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Messageinformation extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique numeric ID of the campaign this message is part of.
     */
    public int $CampaignID;
    /**
     * Number of messages, for which click tracking is enabled.
     */
    public int $ClickTrackedCount;
    /**
     * Unique numeric ID of the contact, to which the message was sent.
     */
    public int $ContactID;
    /**
     * Timestamp indicating when the message was created.
     */
    public string $CreatedAt;
    /**
     * Unique numeric ID of this message.
     */
    public int $ID;
    /**
     * Size of the message (in bytes).
     */
    public int $MessageSize;
    /**
     * Number of messages, for which open tracking is enabled.
     */
    public int $OpenTrackedCount;
    /**
     * Number of messages waiting in the send queue.
     */
    public int $QueuedCount;
    /**
     * Timestamp indicating when last message was sent for the campaign.
     */
    public string $SendEndAt;
    /**
     * Number of actual sent attempts.
     */
    public int $SentCount;
    /**
     * Matched SpamAssassin rules.
     */
    public \MailjetSDK\DTOs\Output\Messageinformation\AssassinRulesDTO $SpamAssassinRules;
    /**
     * SpamAssassin score for this message.
     */
    public float $SpamAssassinScore;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CampaignID' => is_int($value) ? $this->CampaignID = $value : parent::assignMember($name, $value),
            'ClickTrackedCount' => is_int($value) ? $this->ClickTrackedCount = $value : parent::assignMember($name, $value),
            'ContactID' => is_int($value) ? $this->ContactID = $value : parent::assignMember($name, $value),
            'CreatedAt' => is_string($value) ? $this->CreatedAt = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'MessageSize' => is_int($value) ? $this->MessageSize = $value : parent::assignMember($name, $value),
            'OpenTrackedCount' => is_int($value) ? $this->OpenTrackedCount = $value : parent::assignMember($name, $value),
            'QueuedCount' => is_int($value) ? $this->QueuedCount = $value : parent::assignMember($name, $value),
            'SendEndAt' => is_string($value) ? $this->SendEndAt = $value : parent::assignMember($name, $value),
            'SentCount' => is_int($value) ? $this->SentCount = $value : parent::assignMember($name, $value),
            'SpamAssassinScore' => is_float($value) ? $this->SpamAssassinScore = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
