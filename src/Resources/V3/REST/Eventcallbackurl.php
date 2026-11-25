<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Eventcallbackurl extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/eventcallbackurl',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Eventcallbackurl\\Get',
    ];

    /**
     * Event Callback URL List
     *
     * Retrieve a list of all callback URL objects and their configuration settings. Whenever an action (e.g. email open) occurs, the information about it will be sent to the selected callback URL. You can then set up different automation workflows triggered by the tracked actions.
     *
     * > Note: The URL provided cannot be a root URL.
     *
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Eventcallbackurl $params = null): \MailjetSDK\Responses\V3\REST\Eventcallbackurl\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Eventcallbackurl\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/eventcallbackurl',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Eventcallbackurl\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewEventcallbackurl',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Event Callback URL
     *
     * Add a new callback URL used as a webhook to track different email actions. Whenever an action (e.g. email open) occurs, the information about it will be sent to this callback URL. You can then set up different automation workflows triggered by the tracked actions.
     *
     * > Note: The URL provided cannot be a root URL.
     *
     */
    public function post(\MailjetSDK\DTOs\NewEventcallbackurl $payload): \MailjetSDK\Responses\V3\REST\Eventcallbackurl\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Eventcallbackurl\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_URL_ID = [
        'method' => 'DELETE',
        'path' => '/v3/REST/eventcallbackurl/{url_ID}',
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
     * Delete Event Callback URL
     *
     * Delete an existing callback URL.
     */
    public function deleteByUrlID(int $url_ID): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_URL_ID), path: ['url_ID' => $url_ID]);
        return;
    }

    private const array GET_BY_URL_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/eventcallbackurl/{url_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Eventcallbackurl\\ByUrlID\\Get',
    ];

    /**
     * Event Callback URL by ID
     *
     * Retrieve the configuration settings of a specific callback URL. Whenever an action (e.g. email open) occurs, the information about it will be sent to the selected callback URL. You can then set up different automation workflows triggered by the tracked actions.
     *
     * > Note: The URL provided cannot be a root URL.
     *  To obtain a valid `url_ID`, first call `GET /v3/REST/eventcallbackurl` to list your callback URLs.
     */
    public function getByUrlID(int $url_ID): \MailjetSDK\Responses\V3\REST\Eventcallbackurl\ByUrlID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Eventcallbackurl\ByUrlID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_URL_ID), path: ['url_ID' => $url_ID]);
        return $result;
    }

    private const array PUT_BY_URL_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/eventcallbackurl/{url_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Eventcallbackurl\\ByUrlID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Eventcallbackurl',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Event Callback URL
     *
     * Update the configuration settings of an existing callback URL - which type of events it tracks, the URL used, whether it is active or not etc. To obtain a valid `url_ID`, first call `GET /v3/REST/eventcallbackurl` to list your callback URLs.
     */
    public function putByUrlID(int $url_ID, \MailjetSDK\DTOs\Update\Eventcallbackurl $payload): \MailjetSDK\Responses\V3\REST\Eventcallbackurl\ByUrlID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Eventcallbackurl\ByUrlID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_URL_ID), $payload, path: ['url_ID' => $url_ID]);
        return $result;
    }
}
