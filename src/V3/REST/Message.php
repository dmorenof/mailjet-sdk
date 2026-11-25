<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Message extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/message [operationId: get_v3_message] */
    /**
     * Message List
     *
     * Get a list of messages with specific information on the type of content, tracking, sending and delivery.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Message $params = null): \MailjetSDK\Responses\V3\REST\Message\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Message::class)->get($params);
    }

    /** GET /v3/REST/message/{message_ID} [operationId: get_v3_message_id] */
    /**
     * Message by ID
     *
     * Retrieve specific information on the type of content, tracking, sending and delivery for a specific processed message. To obtain a valid `message_ID`, first call `GET /v3/REST/message` to list your messages.
     */
    public static function getByMessageID(int $message_ID): \MailjetSDK\Responses\V3\REST\Message\ByMessageID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Message::class)->getByMessageID($message_ID);
    }
}
