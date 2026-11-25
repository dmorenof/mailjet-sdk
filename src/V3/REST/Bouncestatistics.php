<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Bouncestatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/bouncestatistics [operationId: get_v3_bouncestatistics] */
    /**
     * Bounce Statistics
     *
     * Retrieve a list of all bounce events and details about them - message, contact and campaign IDs, timestamp etc.
     *
     * > Note: If no query parameters are used, will return events with `FromTS` equal to the current day at 00:00 UTC.
     *
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Bouncestatistics $params = null): \MailjetSDK\Responses\V3\REST\Bouncestatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Bouncestatistics::class)->get($params);
    }

    /** GET /v3/REST/bouncestatistics/{message_ID} [operationId: get_v3_bouncestatistics_id] */
    /**
     * Bounce Statistics by ID
     *
     * Retrieve information about a specific bounce event. To obtain a valid `message_ID`, first call `GET /v3/REST/message` to list your messages.
     */
    public static function getByMessageID(int $message_ID): \MailjetSDK\Responses\V3\REST\Bouncestatistics\ByMessageID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Bouncestatistics::class)->getByMessageID($message_ID);
    }

}
