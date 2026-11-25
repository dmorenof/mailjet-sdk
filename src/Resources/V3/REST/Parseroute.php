<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Parseroute extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/parseroute',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Parseroute\\Get',
    ];

    /**
     * Parse Route List
     *
     * Retrieve a list of all parseroute instances and their configuration settings.
     */
    public function get(): \MailjetSDK\Responses\V3\REST\Parseroute\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Parseroute\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/parseroute',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Parseroute\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewParseroute',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Parse Route
     *
     * Create a new parseroute instance. Provide the webhook URL you want to use. The Mailjet Parse API will then createa parse email adedress in the response. Alternatively, you can [select a parse email yourself](/docs/email-api/parse-api/use-own-domain). Emails received to this address will be parsed and the information sent to the webhook URL you have provided in a JSON format.
     *
     * > Note: The URL provided cannot be a root URL.
     *
     */
    public function post(\MailjetSDK\DTOs\NewParseroute $payload): \MailjetSDK\Responses\V3\REST\Parseroute\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Parseroute\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_PARSEROUTE_ID = [
        'method' => 'DELETE',
        'path' => '/v3/REST/parseroute/{parseroute_ID}',
        'security' => [
            [
                'basicAuth' => [],
            ],
        ],
        'success' => [
            204,
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
    ];

    /**
     * Delete Parse Route
     *
     * Delete an existing parseroute instance.
     */
    public function deleteByParserouteID(int $parseroute_ID): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_PARSEROUTE_ID), path: ['parseroute_ID' => $parseroute_ID]);
        return;
    }

    private const array GET_BY_PARSEROUTE_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/parseroute/{parseroute_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Parseroute\\ByParserouteID\\Get',
    ];

    /**
     * Parse Route by ID
     *
     * Get the configuration details for a specific parseroute resource. To obtain a valid `parseroute_ID`, first call `GET /v3/REST/parseroute` to list your parseroutes.
     */
    public function getByParserouteID(int $parseroute_ID): \MailjetSDK\Responses\V3\REST\Parseroute\ByParserouteID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Parseroute\ByParserouteID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PARSEROUTE_ID), path: ['parseroute_ID' => $parseroute_ID]);
        return $result;
    }

    private const array PUT_BY_PARSEROUTE_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/parseroute/{parseroute_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Parseroute\\ByParserouteID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Parseroute',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Parse Route
     *
     * Update the settings of an existing parseroute instance - the webhook URL and/or email address. To obtain a valid `parseroute_ID`, first call `GET /v3/REST/parseroute` to list your parseroutes.
     */
    public function putByParserouteID(int $parseroute_ID, \MailjetSDK\DTOs\Update\Parseroute $payload): \MailjetSDK\Responses\V3\REST\Parseroute\ByParserouteID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Parseroute\ByParserouteID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_PARSEROUTE_ID), $payload, path: ['parseroute_ID' => $parseroute_ID]);
        return $result;
    }
}
