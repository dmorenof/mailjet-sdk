<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Messagestatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/messagestatistics [operationId: get_v3_messagestatistics] */
    /**
     * Message Statistics
     *
     * Retrieve message-based aggregated delivery and engagement statistics. Message-based stats link the delivery rates / contact engagement details to the sending time of the messages. If no query parameters are used, the stats shown will be for messages sent since 00:00 UTC on the current day.
     *
     * > Note: This is a legacy endpoint. We advise using /statcounters to retrieve message-based aggregated stats.
     *
     *
     * @deprecated
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Messagestatistics $params = null): \MailjetSDK\Responses\V3\REST\Messagestatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Messagestatistics::class)->get($params);
    }

    /** GET /v3/REST/messagestatistics/{message_ID} [operationId: get_v3_messagestatistics_id] */
    /**
     * Message Statistics by ID
     *
     * Retrieve delivery and engagement statistics for a specific message. Message-based stats link the delivery rates / contact engagement details to the sending time of the messages. To obtain a valid `message_ID`, first call `GET /v3/REST/message` to list your messages. This endpoint does not support retrieval by individual message ID and always returns global statistics, regardless of the `message_ID` supplied.
     *
     * @deprecated
     */
    public static function getByMessageID(int $message_ID): \MailjetSDK\Responses\V3\REST\Messagestatistics\ByMessageID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Messagestatistics::class)->getByMessageID($message_ID);
    }
}
