<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Messageinformation extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/messageinformation [operationId: get_v3_messageinformation] */
    /**
     * Message Information
     *
     * Retrieve sending / size / spam information about all messages.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Messageinformation $params = null): \MailjetSDK\Responses\V3\REST\Messageinformation\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Messageinformation::class)->get($params);
    }

    /** GET /v3/REST/messageinformation/{message_ID} [operationId: get_v3_messageinformation_id] */
    /**
     * Message Information by ID
     *
     * Retrieve sending / size / spam information about a specific message ID. To obtain a valid `message_ID`, first call `GET /v3/REST/message` to list your messages.
     */
    public static function getByMessageID(int $message_ID): \MailjetSDK\Responses\V3\REST\Messageinformation\ByMessageID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Messageinformation::class)->getByMessageID($message_ID);
    }
}
