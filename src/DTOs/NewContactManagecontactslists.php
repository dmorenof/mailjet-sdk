<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewContactManagecontactslists extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ContactsLists',
    ];

    /**
     * A JSON array, containing information about the contact lists and the actions performed for each list.
     */
    public \MailjetSDK\Collections\NewContactManagecontactslists\ContactsListsCollection $ContactsLists;
}
