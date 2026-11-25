<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewContactslistManageManyContacts extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Action',
    'Contacts',
];

    /**
     * Action to be performed on the contacts for this list:
     *
     * - `addforce` - Add the contacts to this list and subscribe all of them. If the contact is already present in the list as unsubscribed, it will be forcibly subscribed once again.
     * - `addnoforce` - Add the contacts to this list and subscribe them to it. If the contact is already present, it will retain its subscription status, i.e. if a contact is part of the list, but unsubscribed, it will not be forcibly subscribed again.
     * - `remove` - Remove the contacts from this list
     * - `unsub` - Unsubscribe the contacts from this list
     *
     */
    public string $Action;
    /**
     * A JSON array, containing information about the contacts. Each contact is represented by its `Email`, `Name`, exclusion state and `Properties`.
     */
    public \MailjetSDK\Collections\NewContactslistManageManyContacts\ContactsCollection $Contacts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Action' => is_string($value) ? $this->Action = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
