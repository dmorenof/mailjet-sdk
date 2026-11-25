<?php

declare(strict_types=1);

namespace MailjetSDK\V31;

final class Send extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3.1/send [operationId: postSendV31] */
    /**
     * Send an email message via Send API v3.1
     *
     * Send API v3.1 is built mainly for reliability, providing very detailed information in case of sending errors. This results in a lower sending limit, however - Send API v3.1 allows you to send up to 50 messages in a single API call, as opposed to v3, where the limit is 100 messages per call.
     *
     * Additionally, Send API v3.1 includes a Sandbox mode. When enabled, the API will perform all the required validations and return success or error messages, but the message will not be sent.
     *
     */
    public static function post(\MailjetSDK\DTOs\NewSendAPIv31Send $payload): \MailjetSDK\Responses\V31\Send\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V31\Send::class)->post($payload);
    }

}
