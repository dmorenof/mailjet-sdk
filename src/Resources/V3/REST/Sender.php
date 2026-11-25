<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Sender extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/sender',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Sender\\Get',
    ];

    /**
     * Sender List
     *
     * Get information on a list of sender email addresses and/or domains. The e-mail address or domain has to be registered and validated before being used to send e-mails. Validation is done via `/sender/{sender_id}/validate`. In order to manage a sender available across multiple API Keys, see the related `/metasender` resource.
     *
     * > Note: The maximum number of senders and metasenders per user is 100. This includes both validated (`Active`) and non-validated (`Inactive`) ones, but does not include `Deleted` senders / metasenders.
     *
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Sender $params = null): \MailjetSDK\Responses\V3\REST\Sender\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Sender\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/sender',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Sender\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewSender',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Sender
     *
     * Create a new sender email address or domain. The e-mail address or domain has to be registered and validated before being used to send e-mails. Validation is done via `/sender/{sender_id}/validate`. In order to manage a sender available across multiple API Keys, see the related /metasender resource.
     *
     * > Note: The maximum number of senders and metasenders per user is 100. This includes both validated (`Active`) and non-validated (`Inactive`) ones, but does not include `Deleted` senders / metasenders.
     *
     */
    public function post(\MailjetSDK\DTOs\NewSender $payload): \MailjetSDK\Responses\V3\REST\Sender\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Sender\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_SENDER_ID = [
        'method' => 'DELETE',
        'path' => '/v3/REST/sender/{sender_ID}',
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
     * Delete Sender
     *
     * Delete an existing sender email address or domain.
     */
    public function deleteBySenderID(int $sender_ID): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_SENDER_ID), path: ['sender_ID' => $sender_ID]);
        return;
    }

    private const array GET_BY_SENDER_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/sender/{sender_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Sender\\BySenderID\\Get',
    ];

    /**
     * Sender by ID
     *
     * Retrieve details on a specific sender email address or domain. To obtain a valid `sender_ID`, first call `GET /v3/REST/sender` to list your senders.
     */
    public function getBySenderID(int $sender_ID): \MailjetSDK\Responses\V3\REST\Sender\BySenderID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Sender\BySenderID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SENDER_ID), path: ['sender_ID' => $sender_ID]);
        return $result;
    }

    private const array PUT_BY_SENDER_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/sender/{sender_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Sender\\BySenderID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Sender',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Sender
     *
     * Update an existing sender email address or domain. To obtain a valid `sender_ID`, first call `GET /v3/REST/sender` to list your senders.
     */
    public function putBySenderID(int $sender_ID, \MailjetSDK\DTOs\Update\Sender $payload): \MailjetSDK\Responses\V3\REST\Sender\BySenderID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Sender\BySenderID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_SENDER_ID), $payload, path: ['sender_ID' => $sender_ID]);
        return $result;
    }

}
