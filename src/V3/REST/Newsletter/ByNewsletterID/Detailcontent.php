<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Newsletter\ByNewsletterID;

final class Detailcontent extends \MailjetSDK\MailjetAPISDK
{
    /** DELETE /v3/REST/newsletter/{newsletter_ID}/detailcontent [operationId: delete_v3_newsletter_id_detailcontent] */
    /**
     * Delete Newsletter: Detail Content
     *
     * Delete the contents of a newsletter email.
     *
     * @deprecated
     */
    public static function delete(int $newsletter_ID): void
    {
        self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID\Detailcontent::class)->delete($newsletter_ID);
    }

    /** GET /v3/REST/newsletter/{newsletter_ID}/detailcontent [operationId: get_v3_newsletter_id_detailcontent] */
    /**
     * Get Newsletter: Detail Content
     *
     * Retrieve the content of your newsletter email. It will be splin between a Text part and an HTML part. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public static function get(int $newsletter_ID): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Detailcontent\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID\Detailcontent::class)->get($newsletter_ID);
    }

    /** POST /v3/REST/newsletter/{newsletter_ID}/detailcontent [operationId: post_v3_newsletter_id_detailcontent] */
    /**
     * Newsletter: Detail Content
     *
     * Create, update or delete the content of your newsletter email. You can select a Text part and/or HTML part.
     *
     * Each POST request overwrites any content previously added - e.g. if you have submitted HTML content on the initial `POST`, and on the next you only submit Text content, the previously saved value of `Html-part` will be deleted.
     *  To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public static function post(int $newsletter_ID, \MailjetSDK\DTOs\NewNewsletterDetailcontent $payload): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Detailcontent\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID\Detailcontent::class)->post($newsletter_ID, $payload);
    }

    /** PUT /v3/REST/newsletter/{newsletter_ID}/detailcontent [operationId: put_v3_newsletter_id_detailcontent] */
    /**
     * Update Newsletter: Detail Content
     *
     * Update the contents of a newsletter email. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public static function put(int $newsletter_ID, \MailjetSDK\DTOs\Update\NewsletterDetailcontent $payload): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Detailcontent\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID\Detailcontent::class)->put($newsletter_ID, $payload);
    }
}
