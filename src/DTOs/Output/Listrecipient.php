<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Listrecipient extends \MailjetSDK\DTOs\Base\Listrecipient
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Unique numeric ID for the contact the list recipient is linked to.
     */
    public int $ContactID;
    /**
     * Unique numeric ID assigned to this list recipient.
     */
    public int $ID;
    /**
     * Legacy Property - indicates whether the subscription for this contact is active or not. Please use `IsUnsubscribed` instead.
     *
     * Default value: `true`
     *
     *
     * @deprecated
     */
    public bool $IsActive;
    /**
     * Unique numeric ID of the contact list, to which the list recipient was subscribed.
     */
    public int $ListID;
    /**
     * The name of the contact list, to which the list recipient was subscribed.
     */
    public string $ListName;
    /**
     * Timestamp indicating when the list recipient was subscribed to the list.
     */
    public string $SubscribedAt;
    /**
     * Timestamp indicating when the list recipient was unsubscribed from the list.
     */
    public string $UnsubscribedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ContactID' => is_int($value) ? $this->ContactID = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'IsActive' => is_bool($value) ? $this->IsActive = $value : parent::assignMember($name, $value),
            'ListID' => is_int($value) ? $this->ListID = $value : parent::assignMember($name, $value),
            'ListName' => is_string($value) ? $this->ListName = $value : parent::assignMember($name, $value),
            'SubscribedAt' => is_string($value) ? $this->SubscribedAt = $value : parent::assignMember($name, $value),
            'UnsubscribedAt' => is_string($value) ? $this->UnsubscribedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
