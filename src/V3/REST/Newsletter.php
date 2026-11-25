<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Newsletter extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/newsletter [operationId: get_v3_newsletter] */
    /**
     * Newsletter List
     *
     * Retrieve details on the configuration of all newsletters. `Newsletter` and `CampaignDraft` objects are differentiated by the `EditMode` values. We recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder.
     *
     * @deprecated
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Newsletter $params = null): \MailjetSDK\Responses\V3\REST\Newsletter\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter::class)->get($params);
    }

    /** POST /v3/REST/newsletter [operationId: post_v3_newsletter] */
    /**
     * Create Newsletter
     *
     * Create a new newsletter. `CampaignDraft` and `Newsletter` objects are differentiated by the `EditMode` values - we recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder.
     *
     * @deprecated
     */
    public static function post(\MailjetSDK\DTOs\NewNewsletter $payload): \MailjetSDK\Responses\V3\REST\Newsletter\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter::class)->post($payload);
    }

    /** GET /v3/REST/newsletter/{newsletter_ID} [operationId: get_v3_newsletter_id] */
    /**
     * Newsletter by ID
     *
     * Retrieve details on the configuration of a specific newsletter. `CampaignDraft` and `Newsletter` objects are differentiated by the `EditMode` values - we recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public static function getByNewsletterID(int $newsletter_ID): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter::class)->getByNewsletterID($newsletter_ID);
    }

    /** PUT /v3/REST/newsletter/{newsletter_ID} [operationId: put_v3_newsletter_id] */
    /**
     * Update Newsletter
     *
     * Update the configuration settings of a specific newsletter. `Newsletter` and `CampaignDraft` objects are differentiated by the `EditMode` values - we recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public static function putByNewsletterID(int $newsletter_ID, \MailjetSDK\DTOs\Update\Newsletter $payload): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Newsletter::class)->putByNewsletterID($newsletter_ID, $payload);
    }

}
