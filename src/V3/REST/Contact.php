<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Contact extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/contact [operationId: get_v3_contact] */
    /**
     * List Contacts
     *
     * Retrieve a list of all contacts. Includes information about contact status and creation / activity timestamps.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Contact $params = null): \MailjetSDK\Responses\V3\REST\Contact\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contact::class)->get($params);
    }

    /** POST /v3/REST/contact [operationId: post_v3_contact] */
    /**
     * Create Contact
     *
     * Add a new unique contact to your global contact list and select its exclusion status.
     */
    public static function post(\MailjetSDK\DTOs\NewContact $payload): \MailjetSDK\Responses\V3\REST\Contact\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contact::class)->post($payload);
    }

    /** GET /v3/REST/contact/{contact_ID} [operationId: get_v3_contact_id] */
    /**
     * Contact by ID
     *
     * Retrieve a specific contact. Includes information about contact status and creation / activity timestamps. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public static function getByContactID(int $contact_ID): \MailjetSDK\Responses\V3\REST\Contact\ByContactID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contact::class)->getByContactID($contact_ID);
    }

    /** PUT /v3/REST/contact/{contact_ID} [operationId: put_v3_contact_id] */
    /**
     * Update Contact
     *
     * Update the user-given name and exclusion status of a specific contact. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public static function putByContactID(int $contact_ID, \MailjetSDK\DTOs\Update\Contact $payload): \MailjetSDK\Responses\V3\REST\Contact\ByContactID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contact::class)->putByContactID($contact_ID, $payload);
    }

}
