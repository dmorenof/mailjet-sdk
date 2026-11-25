<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewContactslistImportList extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Action',
    'ListID',
];

    /**
     * Action to be performed on the destination list:
     *
     * - `addforce` - Add the contacts to this list and subscribe all of them. If the contact is already present in the list as unsubscribed, it will be forcibly subscribed once again.
     * - `addnoforce` - Add the contacts to this list and subscribe them to it. If the contact is already present, it will retain its subscription status, i.e. if a contact is part of the list, but unsubscribed, it will not be forcibly subscribed again.
     * - `unsub` - Unsubscribe the contacts from this list
     * - `duplicate-override` - Add the contacts and duplicate their subscription status from the source list to the destination list. E.g. if in the source list a contact is unsubscribed and in the destination list the same contact is subscribed, the contact will be marked as unsubscribed in the destination list.
     * - `duplicate-no-override` - Add the contacts without duplicating their subscription status. E.g. if in the source list a contact is unsubscribed and in the destination list the same contact is subscribed, the contact will remain subscribed in the destination list.
     *
     */
    public string $Action;
    /**
     * Unique numeric ID of the source contact list.
     */
    public int $ListID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Action' => is_string($value) ? $this->Action = $value : parent::assignMember($name, $value),
            'ListID' => is_int($value) ? $this->ListID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
