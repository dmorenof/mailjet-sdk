<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Newsletter\ByNewsletterID;

final class Send extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/newsletter/{newsletter_ID}/send [operationId: post_v3_newsletter_id_send] */
    /**
     * Newsletter: Send
     *
     * Send a newsletter immediately.
     *
     * @deprecated
     */
    public static function post(int $newsletter_ID): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Send\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID\Send::class)->post($newsletter_ID);
    }

}
