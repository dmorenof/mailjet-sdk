<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Contactslist\ByListID;

final class Managecontact extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/contactslist/{list_ID}/managecontact [operationId: post_v3_contactslist_id_managecontact] */
    /**
     * Contact List: Manage Contact
     *
     * Manage the presence and subscription status of a contact to a specific contact list. The API will internally create the new contact if it does not exist, as well as add or update the name and properties. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public static function post(int $list_ID, \MailjetSDK\DTOs\NewContactslistManageContact $payload): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Managecontact\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslist\ByListID\Managecontact::class)->post($list_ID, $payload);
    }

}
