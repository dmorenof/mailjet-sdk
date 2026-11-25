<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Contactmetadata extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/contactmetadata [operationId: get_v3_contactmetadata] */
    /**
     * Contact Metadata List
     *
     * Retrieve a list of contact properties and their general settings - name and data type.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Contactmetadata $params = null): \MailjetSDK\Responses\V3\REST\Contactmetadata\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactmetadata::class)->get($params);
    }

    /** POST /v3/REST/contactmetadata [operationId: post_v3_contactmetadata] */
    /**
     * Create Contact Metadata
     *
     * Create a new contact property. Select its name and data type, then use it to assign property values for contacts of your choice (with `/contactdata`).
     */
    public static function post(\MailjetSDK\DTOs\NewContactmetadata $payload): \MailjetSDK\Responses\V3\REST\Contactmetadata\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactmetadata::class)->post($payload);
    }

    /** DELETE /v3/REST/contactmetadata/{contactmetadata_ID} [operationId: delete_v3_contactmetadata_id] */
    /**
     * Delete Contact Metadata
     *
     * Delete an existing contact property. Once the property is deleted, the values assigned to it for all contacts are also deleted.
     */
    public static function deleteByContactmetadataID(int $contactmetadata_ID): void
    {
        self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactmetadata::class)->deleteByContactmetadataID($contactmetadata_ID);
    }

    /** GET /v3/REST/contactmetadata/{contactmetadata_ID} [operationId: get_v3_contactmetadata_id] */
    /**
     * Contact Metadata by ID
     *
     * Retrieve information on a specific contact property - its name and data type. To obtain a valid `contactmetadata_ID`, first call `GET /v3/REST/contactmetadata` to list your contact properties.
     */
    public static function getByContactmetadataID(int $contactmetadata_ID): \MailjetSDK\Responses\V3\REST\Contactmetadata\ByContactmetadataID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactmetadata::class)->getByContactmetadataID($contactmetadata_ID);
    }

    /** PUT /v3/REST/contactmetadata/{contactmetadata_ID} [operationId: put_v3_contactmetadata_id] */
    /**
     * Update Contact Metadata
     *
     * Update the settings of an existing contact property - name and data type. Changing the data type will not affect existing property values, but new values must be entered using the new data type. To obtain a valid `contactmetadata_ID`, first call `GET /v3/REST/contactmetadata` to list your contact properties.
     */
    public static function putByContactmetadataID(int $contactmetadata_ID, \MailjetSDK\DTOs\Update\Contactmetadata $payload): \MailjetSDK\Responses\V3\REST\Contactmetadata\ByContactmetadataID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactmetadata::class)->putByContactmetadataID($contactmetadata_ID, $payload);
    }

}
