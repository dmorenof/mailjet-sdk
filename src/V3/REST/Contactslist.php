<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Contactslist extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/contactslist [operationId: get_v3_contactslist] */
    /**
     * List Contact Lists
     *
     * Retrieve details for all contact lists - name, subscriber count, creation timestamp, deletion status.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Contactslist $params = null): \MailjetSDK\Responses\V3\REST\Contactslist\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslist::class)->get($params);
    }

    /** POST /v3/REST/contactslist [operationId: post_v3_contactslist] */
    /**
     * Create Contact List
     *
     * Create a new contact list.
     */
    public static function post(\MailjetSDK\DTOs\NewContactslist $payload): \MailjetSDK\Responses\V3\REST\Contactslist\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslist::class)->post($payload);
    }

    /** DELETE /v3/REST/contactslist/{list_ID} [operationId: delete_v3_contactslist_id] */
    /**
     * Delete Contact List
     *
     * Delete a contact list. The ContactsList object will continue to exist with Deleted status for 30 days, and can be reinstated by changing the value of IsDeleted to false via `PUT /contactslist/{list_ID}`.
     */
    public static function deleteByListID(int $list_ID): void
    {
        self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslist::class)->deleteByListID($list_ID);
    }

    /** GET /v3/REST/contactslist/{list_ID} [operationId: get_v3_contactslist_id] */
    /**
     * Contact List by ID
     *
     * Retrieve details for a specific contact list - name, subscriber count, creation timestamp, deletion status. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public static function getByListID(int $list_ID): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslist::class)->getByListID($list_ID);
    }

    /** PUT /v3/REST/contactslist/{list_ID} [operationId: put_v3_contactslist_id] */
    /**
     * Update Contact List
     *
     * Update a specific contact list by changing its name and / or deletion status. Using PUT you can delete lists, as well as reinstate previously deleted ones. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public static function putByListID(int $list_ID, \MailjetSDK\DTOs\Update\Contactslist $payload): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslist::class)->putByListID($list_ID, $payload);
    }
}
