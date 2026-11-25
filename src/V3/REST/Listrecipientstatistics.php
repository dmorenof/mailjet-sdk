<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Listrecipientstatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/listrecipientstatistics [operationId: get_v3_listrecipientstatistics] */
    /**
     * List Recipient Statistics
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics for all list recipients. A list recipient object manages the relationship between a `contact` and a `contactslist` - every instance of a contact being added to a list creates a new list recipient.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Listrecipientstatistics $params = null): \MailjetSDK\Responses\V3\REST\Listrecipientstatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Listrecipientstatistics::class)->get($params);
    }

    /** GET /v3/REST/listrecipientstatistics/{listrecipient_ID} [operationId: get_v3_listrecipientstatistics_id] */
    /**
     * List Recipient Statistics by ID
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics for a specific list recipient. To obtain a valid `listrecipient_ID`, first call `GET /v3/REST/listrecipient` to list your list recipients.
     */
    public static function getByListrecipientID(int $listrecipient_ID): \MailjetSDK\Responses\V3\REST\Listrecipientstatistics\ByListrecipientID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Listrecipientstatistics::class)->getByListrecipientID($listrecipient_ID);
    }

}
