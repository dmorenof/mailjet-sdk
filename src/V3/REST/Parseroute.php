<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Parseroute extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/parseroute [operationId: get_v3_parseroute] */
    /**
     * Parse Route List
     *
     * Retrieve a list of all parseroute instances and their configuration settings.
     */
    public static function get(): \MailjetSDK\Responses\V3\REST\Parseroute\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Parseroute::class)->get();
    }

    /** POST /v3/REST/parseroute [operationId: post_v3_parseroute] */
    /**
     * Create Parse Route
     *
     * Create a new parseroute instance. Provide the webhook URL you want to use. The Mailjet Parse API will then createa parse email adedress in the response. Alternatively, you can [select a parse email yourself](/docs/email-api/parse-api/use-own-domain). Emails received to this address will be parsed and the information sent to the webhook URL you have provided in a JSON format.
     *
     * > Note: The URL provided cannot be a root URL.
     *
     */
    public static function post(\MailjetSDK\DTOs\NewParseroute $payload): \MailjetSDK\Responses\V3\REST\Parseroute\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Parseroute::class)->post($payload);
    }

    /** DELETE /v3/REST/parseroute/{parseroute_ID} [operationId: delete_v3_parseroute_id] */
    /**
     * Delete Parse Route
     *
     * Delete an existing parseroute instance.
     */
    public static function deleteByParserouteID(int $parseroute_ID): void
    {
        self::client()->resource(\MailjetSDK\Resources\V3\REST\Parseroute::class)->deleteByParserouteID($parseroute_ID);
    }

    /** GET /v3/REST/parseroute/{parseroute_ID} [operationId: get_v3_parseroute_id] */
    /**
     * Parse Route by ID
     *
     * Get the configuration details for a specific parseroute resource. To obtain a valid `parseroute_ID`, first call `GET /v3/REST/parseroute` to list your parseroutes.
     */
    public static function getByParserouteID(int $parseroute_ID): \MailjetSDK\Responses\V3\REST\Parseroute\ByParserouteID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Parseroute::class)->getByParserouteID($parseroute_ID);
    }

    /** PUT /v3/REST/parseroute/{parseroute_ID} [operationId: put_v3_parseroute_id] */
    /**
     * Update Parse Route
     *
     * Update the settings of an existing parseroute instance - the webhook URL and/or email address. To obtain a valid `parseroute_ID`, first call `GET /v3/REST/parseroute` to list your parseroutes.
     */
    public static function putByParserouteID(int $parseroute_ID, \MailjetSDK\DTOs\Update\Parseroute $payload): \MailjetSDK\Responses\V3\REST\Parseroute\ByParserouteID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Parseroute::class)->putByParserouteID($parseroute_ID, $payload);
    }

}
