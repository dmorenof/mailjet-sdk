<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Contactslist\ByListID;

final class Importlist extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/contactslist/{list_ID}/importlist [operationId: post_v3_contactslist_id_importlist] */
    /**
     * Contact List: Import List
     *
     * Add, unsubscribe or remove the contacts present in a list to / from another list. The list ID specified in the body of the payload is the source, while ID in the path specifies the destination list. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public static function post(int $list_ID, \MailjetSDK\DTOs\NewContactslistImportList $payload): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Importlist\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslist\ByListID\Importlist::class)->post($list_ID, $payload);
    }

    /** GET /v3/REST/contactslist/{list_ID}/importlist/{job_ID} [operationId: get_v3_contactslist_id_importlist_id] */
    /**
     * Get Contact List: Import List
     *
     * Use the JobID generated after a `POST /contactslist/{list_id}/importlist` request to check its progress, success, as well as any errors that might have occurred. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public static function getByJobID(\MailjetSDK\PathParams\V3\REST\Contactslist\ByListID\Importlist\ByJobID $identifier): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Importlist\ByJobID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslist\ByListID\Importlist::class)->getByJobID($identifier);
    }

}
