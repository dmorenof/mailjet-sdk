<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Newsletter\ByNewsletterID;

final class Test extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/newsletter/{newsletter_ID}/test [operationId: post_v3_newsletter_id_test] */
    /**
     * Newsletter: Test
     *
     * Test a created newsletter by sending it to a selection of recipients. The status of the campaign draft will not be affected by the test. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public static function post(int $newsletter_ID, ?\MailjetSDK\DTOs\NewNewsletterTest $payload = null): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Test\Post
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID\Test::class)->post($newsletter_ID);
        }
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID\Test::class)->post($newsletter_ID, $payload);
    }

}
