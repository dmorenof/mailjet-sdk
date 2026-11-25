<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Messagehistory extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/messagehistory/{message_ID} [operationId: get_v3_messagehistory_id] */
    /**
     * Message History by ID
     *
     * Retrieve the event history (sending, open, click etc.) for a specific message. To obtain a valid `message_ID`, first call `GET /v3/REST/message` to list your messages.
     */
    public static function getByMessageID(int $message_ID): \MailjetSDK\Responses\V3\REST\Messagehistory\ByMessageID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Messagehistory::class)->getByMessageID($message_ID);
    }
}
