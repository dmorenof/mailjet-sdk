<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Campaigndraft\ByDraftID;

final class Send extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/campaigndraft/{draft_ID}/send [operationId: post_v3_campaigndraft_id_send] */
    /**
     * Campaign Draft: Send
     *
     * Send a campaign draft immediately.
     */
    public static function post(int $draft_ID): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Send\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID\Send::class)->post($draft_ID);
    }
}
