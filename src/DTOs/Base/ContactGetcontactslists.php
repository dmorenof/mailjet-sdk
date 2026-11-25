<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class ContactGetcontactslists extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Legacy Property - Inidcates whether the subscription for this contact is active or not. Please use `IsUnsub` instead.
     *
     * @deprecated
     */
    public bool $IsActive;
    /**
     * Indicates whether the contact is unsubscribed from this List ID or not.
     */
    public bool $IsUnsub;
    /**
     * Unique numeric ID assigned to this contact list.
     */
    public int $ListID;
    /**
     * Indicates when the contact was subscribed to this list ID.
     *
     * > Note: Returns values only for accounts created after April 5th, 2018.
     *
     */
    public string $SubscribedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'IsActive' => is_bool($value) ? $this->IsActive = $value : parent::assignMember($name, $value),
            'IsUnsub' => is_bool($value) ? $this->IsUnsub = $value : parent::assignMember($name, $value),
            'ListID' => is_int($value) ? $this->ListID = $value : parent::assignMember($name, $value),
            'SubscribedAt' => is_string($value) ? $this->SubscribedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
