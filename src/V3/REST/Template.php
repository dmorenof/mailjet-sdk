<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Template extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/template [operationId: get_v3_template] */
    /**
     * Template List
     *
     * Retrieve a list of all templates and their configuration settings.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Template $params = null): \MailjetSDK\Responses\V3\REST\Template\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Template::class)->get($params);
    }

    /** POST /v3/REST/template [operationId: post_v3_template] */
    /**
     * Create Template
     *
     * Create a new email template object and select its basic configuration settings.
     */
    public static function post(\MailjetSDK\DTOs\NewTemplate $payload): \MailjetSDK\Responses\V3\REST\Template\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Template::class)->post($payload);
    }

    /** DELETE /v3/REST/template/{template_ID} [operationId: delete_v3_template_id] */
    /**
     * Delete Template
     *
     * Delete an email template.
     */
    public static function deleteByTemplateID(int $template_ID): void
    {
        self::client()->resource(\MailjetSDK\Resources\V3\REST\Template::class)->deleteByTemplateID($template_ID);
    }

    /** GET /v3/REST/template/{template_ID} [operationId: get_v3_template_id] */
    /**
     * Template by ID
     *
     * Retrieve the configuration settings for a specific template. To obtain a valid `template_ID`, first call `GET /v3/REST/template` to list your templates.
     */
    public static function getByTemplateID(int $template_ID): \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Template::class)->getByTemplateID($template_ID);
    }

    /** PUT /v3/REST/template/{template_ID} [operationId: put_v3_template_id] */
    /**
     * Update Template
     *
     * Update the configuration settings of an email template. To obtain a valid `template_ID`, first call `GET /v3/REST/template` to list your templates.
     */
    public static function putByTemplateID(int $template_ID, \MailjetSDK\DTOs\Update\Template $payload): \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Template::class)->putByTemplateID($template_ID, $payload);
    }
}
