<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Newsletter\ByNewsletterID;

final class Status extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/newsletter/{newsletter_ID}/status [operationId: get_v3_newsletter_id_status] */
    /**
     * Get Newsletter: Status
     *
     * View the sending status of a newsletter. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public static function get(int $newsletter_ID): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Status\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID\Status::class)->get($newsletter_ID);
    }

}
