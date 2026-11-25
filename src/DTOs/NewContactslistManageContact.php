<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewContactslistManageContact extends \MailjetSDK\DTOs\Base\ContactslistManageContact
{
    public const array REQUIRED_FIELDS = [
        'Action',
        'Email',
    ];

    /**
     * Action to be performed on the contact for this list:
     *
     * - `addforce` - Add the contact to this list and subscribe all of them. If the contact is already present in the list as unsubscribed, it will be forcibly subscribed once again.
     * - `addnoforce` - Add the contact to this list and subscribe them to it. If the contact is already present, it will retain its subscription status, i.e. if a contact is part of the list, but unsubscribed, it will not be forcibly subscribed again.
     * - `remove` - Remove the contact from this list
     * - `unsub` - Unsubscribe the contact from this list
     *
     */
    public string $Action;
    /**
     * The email address of this contact.
     */
    public string $Email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Action' => is_string($value) ? $this->Action = $value : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
