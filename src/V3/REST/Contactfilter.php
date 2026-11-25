<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Contactfilter extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/contactfilter [operationId: get_v3_contactfilter] */
    /**
     * Contact Filter List
     *
     * Retrieve a list of all segments and details on their configuration. Segments can be applied on contact lists when you send your campaigns. Segmentation is done based on additional data saved for contacts via `/contactmetadata` and/or based on contact activity (or lack thereof).
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Contactfilter $params = null): \MailjetSDK\Responses\V3\REST\Contactfilter\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactfilter::class)->get($params);
    }

    /** POST /v3/REST/contactfilter [operationId: post_v3_contactfilter] */
    /**
     * Create Contact Filter
     *
     * Create a new segmentation formula to be applied on contact lists when you send your campaigns. Segmentation can be done based on additional data saved for contacts via `/contactmetadata` and/or based on contact activity (or lack thereof). The properties used in `Expression` must already exist on your account - create them first with `POST /v3/REST/contactmetadata`, otherwise the request fails with `Unknown identifier`.
     */
    public static function post(\MailjetSDK\DTOs\NewContactfilter $payload): \MailjetSDK\Responses\V3\REST\Contactfilter\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactfilter::class)->post($payload);
    }

    /** DELETE /v3/REST/contactfilter/{contactfilter_ID} [operationId: delete_v3_contactfilter_id] */
    /**
     * Delete Contact Filter
     *
     * Delete an existing segment. Segments can be applied on contact lists when you send your campaigns. Segmentation is done based on additional data saved for contacts via `/contactmetadata`  and/or based on contact activity (or lack thereof).
     *
     * The deletion is a soft one and a deleted segment can later be reinstated by changing its `Status` via a `PUT` request.
     *
     */
    public static function deleteByContactfilterID(int $contactfilter_ID): void
    {
        self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactfilter::class)->deleteByContactfilterID($contactfilter_ID);
    }

    /** GET /v3/REST/contactfilter/{contactfilter_ID} [operationId: get_v3_contactfilter_id] */
    /**
     * Contact Filter by ID
     *
     * Retrieve configuration details for a specific segment. Segments can be applied on contact lists when you send your campaigns. Segmentation is done based on additional data saved for contacts via `/contactmetadata`  and/or based on contact activity (or lack thereof). To obtain a valid `contactfilter_ID`, first call `GET /v3/REST/contactfilter` to list your segments.
     */
    public static function getByContactfilterID(int $contactfilter_ID): \MailjetSDK\Responses\V3\REST\Contactfilter\ByContactfilterID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactfilter::class)->getByContactfilterID($contactfilter_ID);
    }

    /** PUT /v3/REST/contactfilter/{contactfilter_ID} [operationId: put_v3_contactfilter_id] */
    /**
     * Update Contact Filter
     *
     * Update an existing segment. Segments can be applied on contact lists when you send your campaigns. Segmentation is done based on additional data saved for contacts via `/contactmetadata`  and/or based on contact activity (or lack thereof).
     *
     * Only segments with `deleted` status can be updated via the API. Deleted segments can be updated to `unused`.
     *  To obtain a valid `contactfilter_ID`, first call `GET /v3/REST/contactfilter` to list your segments.
     */
    public static function putByContactfilterID(int $contactfilter_ID, \MailjetSDK\DTOs\Update\Contactfilter $payload): \MailjetSDK\Responses\V3\REST\Contactfilter\ByContactfilterID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactfilter::class)->putByContactfilterID($contactfilter_ID, $payload);
    }

}
