<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Listrecipient extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/listrecipient [operationId: get_v3_listrecipient] */
    /**
     * List Recipient List
     *
     * Retrieve details on all list recipients, including the contact and list associated with them, as well as subscription status.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Listrecipient $params = null): \MailjetSDK\Responses\V3\REST\Listrecipient\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Listrecipient::class)->get($params);
    }

    /** POST /v3/REST/listrecipient [operationId: post_v3_listrecipient] */
    /**
     * Create List Recipient
     *
     * Create a new list recipient. A list recipient object manages the relationship between a `contact` and a `contactslist` - every instance of a contact being added to a list creates a new list recipient. Both the contact and the list need to be created beforehand. Use `GET /v3/REST/contact` and `GET /v3/REST/contactslist` to obtain valid `ContactID` and `ListID` values - the IDs in the example below are placeholders and will not exist in your account.
     */
    public static function post(\MailjetSDK\DTOs\NewListrecipient $payload): \MailjetSDK\Responses\V3\REST\Listrecipient\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Listrecipient::class)->post($payload);
    }

    /** DELETE /v3/REST/listrecipient/{listrecipient_ID} [operationId: delete_v3_listrecipient_id] */
    /**
     * Delete List Recipient
     *
     * Delete a list recipient. This effectively removes a contact from a contact list.
     */
    public static function deleteByListrecipientID(int $listrecipient_ID): void
    {
        self::client()->resource(\MailjetSDK\Resources\V3\REST\Listrecipient::class)->deleteByListrecipientID($listrecipient_ID);
    }

    /** GET /v3/REST/listrecipient/{listrecipient_ID} [operationId: get_v3_listrecipient_id] */
    /**
     * List Recipient by ID
     *
     * Retrieve details for a specific list recipient, including the contact and list associated with it, as well as the subscription status. To obtain a valid `listrecipient_ID`, first call `GET /v3/REST/listrecipient` to list your list recipients.
     */
    public static function getByListrecipientID(int $listrecipient_ID): \MailjetSDK\Responses\V3\REST\Listrecipient\ByListrecipientID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Listrecipient::class)->getByListrecipientID($listrecipient_ID);
    }

    /** PUT /v3/REST/listrecipient/{listrecipient_ID} [operationId: put_v3_listrecipient_id] */
    /**
     * Update List Recipient
     *
     * Update the subscription status of a list recipient. To obtain a valid `listrecipient_ID`, first call `GET /v3/REST/listrecipient` to list your list recipients.
     */
    public static function putByListrecipientID(int $listrecipient_ID, \MailjetSDK\DTOs\Update\Listrecipient $payload): \MailjetSDK\Responses\V3\REST\Listrecipient\ByListrecipientID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Listrecipient::class)->putByListrecipientID($listrecipient_ID, $payload);
    }
}
