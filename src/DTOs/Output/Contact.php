<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Contact extends \MailjetSDK\DTOs\Base\Contact
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Indicates when the contact was added to the global contact list.
     */
    public string $CreatedAt;
    /**
     * Number of messages delivered to this contact.
     */
    public int $DeliveredCount;
    /**
     * Contact email address.
     */
    public string $Email;
    /**
     * Timestamp of the last time the exclusion status of this contact has changed.
     */
    public string $ExclusionFromCampaignsUpdatedAt;
    /**
     * Unique numeric ID of this contact.
     */
    public int $ID;
    /**
     * Indicates whether the contact's subscription to a contact list is pending or not.
     */
    public bool $IsOptInPending;
    /**
     * Indicates whether any spam complaints have been received for this contact or not.
     */
    public bool $IsSpamComplaining;
    /**
     * Timestamp of last registered activity for this contact - receiving an email, open, click, unsubscribe etc.
     */
    public string $LastActivityAt;
    /**
     * Timestamp of the last time this contact's name or exclusion status was changed.
     */
    public string $LastUpdateAt;
    /**
     * Timestamp of the last request to unsubscribe from all lists.
     *
     * @deprecated
     */
    public string $UnsubscribedAt;
    /**
     * Description of who initiated the request to unsubscribe from
     * all lists.
     *
     * @deprecated
     */
    public string $UnsubscribedBy;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CreatedAt' => is_string($value) ? $this->CreatedAt = $value : parent::assignMember($name, $value),
            'DeliveredCount' => is_int($value) ? $this->DeliveredCount = $value : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'ExclusionFromCampaignsUpdatedAt' => is_string($value) ? $this->ExclusionFromCampaignsUpdatedAt = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'IsOptInPending' => is_bool($value) ? $this->IsOptInPending = $value : parent::assignMember($name, $value),
            'IsSpamComplaining' => is_bool($value) ? $this->IsSpamComplaining = $value : parent::assignMember($name, $value),
            'LastActivityAt' => is_string($value) ? $this->LastActivityAt = $value : parent::assignMember($name, $value),
            'LastUpdateAt' => is_string($value) ? $this->LastUpdateAt = $value : parent::assignMember($name, $value),
            'UnsubscribedAt' => is_string($value) ? $this->UnsubscribedAt = $value : parent::assignMember($name, $value),
            'UnsubscribedBy' => is_string($value) ? $this->UnsubscribedBy = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
