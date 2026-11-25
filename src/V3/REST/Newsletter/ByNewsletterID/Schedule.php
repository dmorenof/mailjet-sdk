<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Newsletter\ByNewsletterID;

final class Schedule extends \MailjetSDK\MailjetAPISDK
{
    /** DELETE /v3/REST/newsletter/{newsletter_ID}/schedule [operationId: delete_v3_newsletter_id_schedule] */
    /**
     * Delete Newsletter: Schedule
     *
     * Cancel the scheduled sending of a newsletter.
     *
     * @deprecated
     */
    public static function delete(int $newsletter_ID): void
    {
        self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID\Schedule::class)->delete($newsletter_ID);
    }

    /** GET /v3/REST/newsletter/{newsletter_ID}/schedule [operationId: get_v3_newsletter_id_schedule] */
    /**
     * Get Newsletter: Schedule
     *
     * Retrieve the sending schedule of a newsletter. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public static function get(int $newsletter_ID): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Schedule\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID\Schedule::class)->get($newsletter_ID);
    }

    /** POST /v3/REST/newsletter/{newsletter_ID}/schedule [operationId: post_v3_newsletter_id_schedule] */
    /**
     * Newsletter: Schedule
     *
     * Schedule the sending of a newsletter.
     *
     * @deprecated
     */
    public static function post(int $newsletter_ID, \MailjetSDK\DTOs\NewNewsletterSchedule $payload): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Schedule\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID\Schedule::class)->post($newsletter_ID, $payload);
    }

    /** PUT /v3/REST/newsletter/{newsletter_ID}/schedule [operationId: put_v3_newsletter_id_schedule] */
    /**
     * Update Newsletter: Schedule
     *
     * Update the schedule for sending a newsletter.
     *
     * @deprecated
     */
    public static function put(int $newsletter_ID, \MailjetSDK\DTOs\Update\NewsletterSchedule $payload): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Schedule\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID\Schedule::class)->put($newsletter_ID, $payload);
    }

}
