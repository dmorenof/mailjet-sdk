<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Newsletter extends \MailjetSDK\DTOs\Base\Newsletter
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Unique numeric ID for this newsletter.
     */
    public int $CampaignID;
    /**
     * Unique numeric ID for the contact list linked to this newsletter. Required for successful sending of the campaign.
     */
    public int $ContactsListID;
    /**
     * Timestamp of when the newsletter was created.
     */
    public string $CreatedAt;
    /**
     * Timestamp of when the newsletter was delivered to the campaign's recipients.
     */
    public string $DeliveredAt;
    /**
     * Unique numeric ID for this newsletter.
     */
    public int $ID;
    /**
     * Indicates whether the newsletter has been sent out, or a test email was sent out, or not.
     */
    public bool $IsHandled;
    /**
     * Locale, in which the information is saved.
     */
    public string $Locale;
    /**
     * Timestamp of when the newsletter was last modified.
     */
    public string $ModifiedAt;
    /**
     * ID of the segment configuration (contactfilter) used for this newsletter.
     */
    public int $SegmentationID;
    /**
     * Unique numeric ID of the sender email address.
     */
    public string $Sender;
    /**
     * Email address of the sender.
     */
    public string $SenderEmail;
    /**
     * Subject line for the newsletter emails.
     */
    public string $Subject;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CampaignID' => is_int($value) ? $this->CampaignID = $value : parent::assignMember($name, $value),
            'ContactsListID' => is_int($value) ? $this->ContactsListID = $value : parent::assignMember($name, $value),
            'CreatedAt' => is_string($value) ? $this->CreatedAt = $value : parent::assignMember($name, $value),
            'DeliveredAt' => is_string($value) ? $this->DeliveredAt = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'IsHandled' => is_bool($value) ? $this->IsHandled = $value : parent::assignMember($name, $value),
            'Locale' => is_string($value) ? $this->Locale = $value : parent::assignMember($name, $value),
            'ModifiedAt' => is_string($value) ? $this->ModifiedAt = $value : parent::assignMember($name, $value),
            'SegmentationID' => is_int($value) ? $this->SegmentationID = $value : parent::assignMember($name, $value),
            'Sender' => is_string($value) ? $this->Sender = $value : parent::assignMember($name, $value),
            'SenderEmail' => is_string($value) ? $this->SenderEmail = $value : parent::assignMember($name, $value),
            'Subject' => is_string($value) ? $this->Subject = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
