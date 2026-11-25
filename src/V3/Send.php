<?php

declare(strict_types=1);

namespace MailjetSDK\V3;

final class Send extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/send [operationId: postSendV3] */
    /**
     * Send an email message via Send API v3
     *
     * Send a message via Send API v3. Send API v3 is built mainly for speed, allowing you to send up to 100 messages in a single API call, as opposed to v3.1, where the limit is 50 messages per call. However, it lacks some of the more complex functionalities of Send API v3.1 like detailed feedback information in case of sending errors.
     */
    public static function post(\MailjetSDK\DTOs\NewMessageSendAPIv3Send $payload): \MailjetSDK\Responses\V3\Send\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\Send::class)->post($payload);
    }
}
