<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Metasender extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/metasender',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Metasender\\Get',
    ];

    /**
     * Meta Sender List
     *
     * Retrieve a list of all metasenders and their configuration settings. A metasender is a sender available for use by the Primary API Key and all sub-accounts. The e-mail address or domain has to be registered and validated before being used to send e-mails. Validation is done by contacting the Mailjet Support team. In order to manage a sender available for a single API Key, see the related `/sender` resource.
     *
     * > Note: The maximum number of senders and metasenders per user is 100. This includes both validated (`Active`) and non-validated (`Inactive`) ones, but does not include Deleted senders / metasenders.
     *
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Metasender $params = null): \MailjetSDK\Responses\V3\REST\Metasender\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Metasender\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/metasender',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Metasender\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewMetasender',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Meta Sender
     *
     * Create a new metasender email address or domain. A metasender is a sender available for use by the Primary API Key and all sub-accounts. The e-mail address or domain has to be registered and validated before being used to send e-mails. Validation is done by contacting the Mailjet Support team. In order to manage a sender available for a single API Key, see the related `/sender` resource.
     *
     * > Note: The maximum number of senders and metasenders per user is 100. This includes both validated (`Active`) and non-validated (`Inactive`) ones, but does not include Deleted senders / metasenders.
     *
     */
    public function post(\MailjetSDK\DTOs\NewMetasender $payload): \MailjetSDK\Responses\V3\REST\Metasender\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Metasender\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_METASENDER_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/metasender/{metasender_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Metasender\\ByMetasenderID\\Get',
    ];

    /**
     * Meta Sender by ID
     *
     * Retrieve an existing metasender object and its configuration settings. To obtain a valid `metasender_ID`, first call `GET /v3/REST/metasender` to list your metasenders.
     */
    public function getByMetasenderID(int $metasender_ID): \MailjetSDK\Responses\V3\REST\Metasender\ByMetasenderID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Metasender\ByMetasenderID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_METASENDER_ID), path: ['metasender_ID' => $metasender_ID]);
        return $result;
    }

    private const array PUT_BY_METASENDER_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/metasender/{metasender_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Metasender\\ByMetasenderID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Metasender',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Metasender
     *
     * Update and existing metasender email address or domain. Only the email address and description can be updated. To obtain a valid `metasender_ID`, first call `GET /v3/REST/metasender` to list your metasenders.
     */
    public function putByMetasenderID(int $metasender_ID, \MailjetSDK\DTOs\Update\Metasender $payload): \MailjetSDK\Responses\V3\REST\Metasender\ByMetasenderID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Metasender\ByMetasenderID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_METASENDER_ID), $payload, path: ['metasender_ID' => $metasender_ID]);
        return $result;
    }

}
