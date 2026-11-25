<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Apikey extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/apikey',
        'security' => [
            [
                'basicAuth' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            404 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            429 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Apikey\\Get',
    ];

    /**
     * API Key List
     *
     * Retrieve a list of all API Keys and their configuration settings. API Keys are used as credentials to access the API and SMTP server.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Apikey $params = null): \MailjetSDK\Responses\V3\REST\Apikey\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Apikey\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/apikey',
        'security' => [
            [
                'basicAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            404 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            429 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Apikey\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewApikey',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create API Key
     *
     * Create a sub-account with a new Public and Secret API Key. API Keys are used as credentials to access the API and SMTP server.
     */
    public function post(\MailjetSDK\DTOs\NewApikey $payload): \MailjetSDK\Responses\V3\REST\Apikey\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Apikey\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_APIKEY_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/apikey/{apikey_ID}',
        'security' => [
            [
                'basicAuth' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            404 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            429 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Apikey\\ByApikeyID\\Get',
    ];

    /**
     * API Key by ID
     *
     * Retrieve the configuration settings of a specific API Key. API Keys are used as credentials to access the API and SMTP server. To obtain a valid `apikey_ID`, first call `GET /v3/REST/apikey` to list your API keys.
     */
    public function getByApikeyID(int $apikey_ID): \MailjetSDK\Responses\V3\REST\Apikey\ByApikeyID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Apikey\ByApikeyID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_APIKEY_ID), path: ['apikey_ID' => $apikey_ID]);
        return $result;
    }

    private const array PUT_BY_APIKEY_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/apikey/{apikey_ID}',
        'security' => [
            [
                'basicAuth' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            404 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            429 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Apikey\\ByApikeyID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Apikey',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update API Key
     *
     * Update the settings of an existing API Key. You can use this to deactivate an API Key as well. API Keys are used as credentials to access the API and SMTP server. To obtain a valid `apikey_ID`, first call `GET /v3/REST/apikey` to list your API keys.
     */
    public function putByApikeyID(int $apikey_ID, \MailjetSDK\DTOs\Update\Apikey $payload): \MailjetSDK\Responses\V3\REST\Apikey\ByApikeyID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Apikey\ByApikeyID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_APIKEY_ID), $payload, path: ['apikey_ID' => $apikey_ID]);
        return $result;
    }
}
