<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Contactdata extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/contactdata [operationId: get_v3_contactdata] */
    /**
     * Contact Data
     *
     * Retrieve a list of contacts with all properties and respective values associated with those contacts.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Contactdata $params = null): \MailjetSDK\Responses\V3\REST\Contactdata\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactdata::class)->get($params);
    }

    /** DELETE /v3/REST/contactdata/{contact_ID} [operationId: delete_v3_contactdata_id] */
    /**
     * Delete Contact Data
     *
     * Delete all contact property values relating to a specific contact.
     */
    public static function deleteByContactID(int $contact_ID): void
    {
        self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactdata::class)->deleteByContactID($contact_ID);
    }

    /** GET /v3/REST/contactdata/{contact_ID} [operationId: get_v3_contactdata_id] */
    /**
     * Contact Data by ID
     *
     * Retrieve all properties and respective values associated with a specific contact. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public static function getByContactID(int $contact_ID): \MailjetSDK\Responses\V3\REST\Contactdata\ByContactID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactdata::class)->getByContactID($contact_ID);
    }

    /** PUT /v3/REST/contactdata/{contact_ID} [operationId: put_v3_contactdata_id] */
    /**
     * Update Contact Data
     *
     * Update the extra static data for a contact by using your already created `/contactmetadata` objects (contact properties) and assigning / updating values to them for the specific `ContactID`. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public static function putByContactID(int $contact_ID, \MailjetSDK\DTOs\Update\Contactdata $payload): \MailjetSDK\Responses\V3\REST\Contactdata\ByContactID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactdata::class)->putByContactID($contact_ID, $payload);
    }
}
