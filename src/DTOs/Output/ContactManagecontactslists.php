<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class ContactManagecontactslists extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A JSON array, containing information about the contact lists and the actions performed for each list.
     */
    public \MailjetSDK\Collections\Output\ContactManagecontactslists\ContactsListsCollection $ContactsLists;
}
