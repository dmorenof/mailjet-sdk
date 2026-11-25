<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Update;

final class Newsletter extends \MailjetSDK\DTOs\Base\Newsletter
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Unique numeric ID for the contact list linked to this newsletter. Required for successful sending of the campaign.
     */
    public int $ContactsListID;
    /**
     * Locale, in which the information is saved.
     */
    public string $Locale;
    /**
     * The user-selected name of the segment configuration (contactfilter) used for this newsletter. Interchangeable with `SegmentationID`.
     */
    public string $SegmentationAlt;
    /**
     * ID of the segment configuration (contactfilter) used for this newsletter. Interchangeable with `SegmentationAlt`.
     */
    public int $SegmentationID;
    /**
     * ID of the sender email address. Required for successful sending of the newsletter.
     */
    public string $Sender;
    /**
     * The email address of the sender. Required for successful sending of the newsletter.
     */
    public string $SenderEmail;
    /**
     * Subject line for the newsletter emails.
     */
    public string $Subject;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ContactsListID' => is_int($value) ? $this->ContactsListID = $value : parent::assignMember($name, $value),
            'Locale' => is_string($value) ? $this->Locale = $value : parent::assignMember($name, $value),
            'SegmentationAlt' => is_string($value) ? $this->SegmentationAlt = $value : parent::assignMember($name, $value),
            'SegmentationID' => is_int($value) ? $this->SegmentationID = $value : parent::assignMember($name, $value),
            'Sender' => is_string($value) ? $this->Sender = $value : parent::assignMember($name, $value),
            'SenderEmail' => is_string($value) ? $this->SenderEmail = $value : parent::assignMember($name, $value),
            'Subject' => is_string($value) ? $this->Subject = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
