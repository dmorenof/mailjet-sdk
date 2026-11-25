<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\NewContactManagecontactslists;

final class ContactsListsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'Action',
        'ListID',
    ];

    /**
     * Action to be performed on the contacts for this list:
     *
     *  * `addforce` - Add the contacts to this list and subscribe all of them. Any contacts already present in the list and unsubscribed from it will be forcibly subscribed once again.
     *
     *  * `addnoforce` - Add the contacts to this list and subscribe them to it. Any contacts already present will retain their subscription status, i.e. if a contact is part of the list, but unsubscribed, it will not be forcibly subscribed again.
     *
     *  * `remove` - Remove the contacts from this list.
     *
     *  * `unsub` - Unsubscribe the contacts from this list.
     *
     */
    public \MailjetSDK\Enums\NewContactManagecontactslists\ContactsListsItem\ActionEnum $Action;
    /**
     * Unique numeric ID of the contact list.
     * Format: int64
     */
    public int $ListID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Action' => is_string($value) ? $this->Action = \MailjetSDK\Enums\NewContactManagecontactslists\ContactsListsItem\ActionEnum::from($value) : parent::assignMember($name, $value),
            'ListID' => is_int($value) ? $this->ListID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
