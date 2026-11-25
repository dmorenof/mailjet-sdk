<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Senderstatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/senderstatistics [operationId: get_v3_senderstatistics] */
    /**
     * Sender Statistics
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics, grouped by sender ID.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve aggregated statistics for senders.
     *
     *
     * @deprecated
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Senderstatistics $params = null): \MailjetSDK\Responses\V3\REST\Senderstatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Senderstatistics::class)->get($params);
    }

    /** GET /v3/REST/senderstatistics/{sender_ID} [operationId: get_v3_senderstatistics_id] */
    /**
     * Sender Statistics by ID
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics for a specific sender ID.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve aggregated statistics for senders.
     *  To obtain a valid `sender_ID`, first call `GET /v3/REST/sender` to list your senders.
     *
     * @deprecated
     */
    public static function getBySenderID(int $sender_ID): \MailjetSDK\Responses\V3\REST\Senderstatistics\BySenderID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Senderstatistics::class)->getBySenderID($sender_ID);
    }
}
