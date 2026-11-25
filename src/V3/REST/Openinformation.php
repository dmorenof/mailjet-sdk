<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Openinformation extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/openinformation [operationId: get_v3_openinformation] */
    /**
     * Open Information
     *
     * Retrieve a list of all open events and details about them - message, campaign and contact IDs, timestamp etc.
     *
     * > If no query parameters are used, will return events with `FromTS` equal to the current day at 00:00 UTC.
     *
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Openinformation $params = null): \MailjetSDK\Responses\V3\REST\Openinformation\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Openinformation::class)->get($params);
    }

    /** GET /v3/REST/openinformation/{message_ID} [operationId: get_v3_openinformation_id] */
    /**
     * Open Information by ID
     *
     * Retrieve open event details for a specific message. To obtain a valid `message_ID`, first call `GET /v3/REST/message` to list your messages.
     */
    public static function getByMessageID(int $message_ID): \MailjetSDK\Responses\V3\REST\Openinformation\ByMessageID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Openinformation::class)->getByMessageID($message_ID);
    }

}
