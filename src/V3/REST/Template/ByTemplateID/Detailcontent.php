<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Template\ByTemplateID;

final class Detailcontent extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/template/{template_ID}/detailcontent [operationId: get_v3_template_id_detailcontent] */
    /**
     * Get Template: Detail Content
     *
     * Retrieve the contents of an email template. It will be split between a Text part, HTML part, MJML content and/or additional headers. To obtain a valid `template_ID`, first call `GET /v3/REST/template` to list your templates.
     */
    public static function get(int $template_ID): \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Detailcontent\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Template\ByTemplateID\Detailcontent::class)->get($template_ID);
    }

    /** POST /v3/REST/template/{template_ID}/detailcontent [operationId: post_v3_template_id_detailcontent] */
    /**
     * Template: Detail Content
     *
     * Create the contents of an email template. You can select a Text part, HTML part, MJML content, as well as additional headers. To obtain a valid `template_ID`, first call `GET /v3/REST/template` to list your templates.
     */
    public static function post(int $template_ID, \MailjetSDK\DTOs\NewTemplateDetailcontent $payload): \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Detailcontent\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Template\ByTemplateID\Detailcontent::class)->post($template_ID, $payload);
    }

    /** PUT /v3/REST/template/{template_ID}/detailcontent [operationId: put_v3_template_id_detailcontent] */
    /**
     * Update Template: Detail Content
     *
     * Update the contents of an email template - the Text part, HTML part, MJML content and/or the additional headers. To obtain a valid `template_ID`, first call `GET /v3/REST/template` to list your templates.
     */
    public static function put(int $template_ID, \MailjetSDK\DTOs\NewTemplateDetailcontent $payload): \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Detailcontent\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Template\ByTemplateID\Detailcontent::class)->put($template_ID, $payload);
    }
}
