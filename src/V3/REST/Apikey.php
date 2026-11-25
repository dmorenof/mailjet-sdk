<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Apikey extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/apikey [operationId: get_v3_apikey] */
    /**
     * API Key List
     *
     * Retrieve a list of all API Keys and their configuration settings. API Keys are used as credentials to access the API and SMTP server.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Apikey $params = null): \MailjetSDK\Responses\V3\REST\Apikey\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Apikey::class)->get($params);
    }

    /** POST /v3/REST/apikey [operationId: post_v3_apikey] */
    /**
     * Create API Key
     *
     * Create a sub-account with a new Public and Secret API Key. API Keys are used as credentials to access the API and SMTP server.
     */
    public static function post(\MailjetSDK\DTOs\NewApikey $payload): \MailjetSDK\Responses\V3\REST\Apikey\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Apikey::class)->post($payload);
    }

    /** GET /v3/REST/apikey/{apikey_ID} [operationId: get_v3_apikey_id] */
    /**
     * API Key by ID
     *
     * Retrieve the configuration settings of a specific API Key. API Keys are used as credentials to access the API and SMTP server. To obtain a valid `apikey_ID`, first call `GET /v3/REST/apikey` to list your API keys.
     */
    public static function getByApikeyID(int $apikey_ID): \MailjetSDK\Responses\V3\REST\Apikey\ByApikeyID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Apikey::class)->getByApikeyID($apikey_ID);
    }

    /** PUT /v3/REST/apikey/{apikey_ID} [operationId: put_v3_apikey_id] */
    /**
     * Update API Key
     *
     * Update the settings of an existing API Key. You can use this to deactivate an API Key as well. API Keys are used as credentials to access the API and SMTP server. To obtain a valid `apikey_ID`, first call `GET /v3/REST/apikey` to list your API keys.
     */
    public static function putByApikeyID(int $apikey_ID, \MailjetSDK\DTOs\Update\Apikey $payload): \MailjetSDK\Responses\V3\REST\Apikey\ByApikeyID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Apikey::class)->putByApikeyID($apikey_ID, $payload);
    }

}
