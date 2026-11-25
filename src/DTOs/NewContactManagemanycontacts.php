<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewContactManagemanycontacts extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Contacts',
];

    /**
     * A JSON array, containing information about the contacts. Each contact is represented by its `Email`, `Name`, optional campaign exclusion state and `Properties`.
     */
    public \MailjetSDK\Collections\NewContactManagemanycontacts\ContactsCollection $Contacts;
    /**
     * A JSON array, containing information about the contact lists and the actions performed for each list.
     */
    public \MailjetSDK\Collections\NewContactManagemanycontacts\ContactsListsCollection $ContactsLists;

}
