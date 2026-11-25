<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Sender\BySenderID;

final class Validate extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/sender/{sender_ID}/validate [operationId: post_v3_sender_id_validate] */
    /**
     * Sender: Validate
     *
     * Validate a registered sender email address or domain. A sender domain (*&#64;domain.com) is validated by checking the caller's rights, the existence of a metasender for that domain or by searching for the ownership token on the domain root or in the DNS. To obtain a valid `sender_ID`, first call `GET /v3/REST/sender` to list your senders.
     */
    public static function post(int $sender_ID): \MailjetSDK\Responses\V3\REST\Sender\BySenderID\Validate\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Sender\BySenderID\Validate::class)->post($sender_ID);
    }

}
