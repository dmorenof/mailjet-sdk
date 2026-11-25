<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Liststatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/liststatistics [operationId: get_v3_liststatistics] */
    /**
     * List Statistics
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics, as well as general details and subscriber counts for all contact lists.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve aggregated statistics for contact lists.
     *
     *
     * @deprecated
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Liststatistics $params = null): \MailjetSDK\Responses\V3\REST\Liststatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Liststatistics::class)->get($params);
    }

    /** GET /v3/REST/liststatistics/{list_ID} [operationId: get_v3_liststatistics_id] */
    /**
     * List Statistics by ID
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics, as well as general details and subscriber count for a specific contact list.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve aggregated statistics for contact lists.
     *  To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     *
     * @deprecated
     */
    public static function getByListID(int $list_ID): \MailjetSDK\Responses\V3\REST\Liststatistics\ByListID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Liststatistics::class)->getByListID($list_ID);
    }
}
