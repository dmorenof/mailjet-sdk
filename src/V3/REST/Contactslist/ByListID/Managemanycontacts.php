<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Contactslist\ByListID;

final class Managemanycontacts extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/contactslist/{list_ID}/managemanycontacts [operationId: post_v3_contactslist_id_managemanycontacts] */
    /**
     * Contact List: Manage Many Contacts
     *
     * Manage multiple contacts by adding, removing or unsubscribing them from a specific contact list. Once you submit the `POST` request, it will return a `JobID`, which you can use to verify the success of the `POST` request, as well as see what kind of errors came up. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public static function post(int $list_ID, \MailjetSDK\DTOs\NewContactslistManageManyContacts $payload): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Managemanycontacts\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslist\ByListID\Managemanycontacts::class)->post($list_ID, $payload);
    }

    /** GET /v3/REST/contactslist/{list_ID}/managemanycontacts/{job_ID} [operationId: get_v3_contactslist_id_managemanycontacts_id] */
    /**
     * Get Contact List: Manage Many Contacts
     *
     * Use the `JobID` generated after a `POST /contactslist/{list_id}/managemanycontacts` request to check its progress, success, as well as any errors that might have occurred. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public static function getByJobID(\MailjetSDK\PathParams\V3\REST\Contactslist\ByListID\Managemanycontacts\ByJobID $identifier): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Managemanycontacts\ByJobID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslist\ByListID\Managemanycontacts::class)->getByJobID($identifier);
    }

}
