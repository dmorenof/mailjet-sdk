<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Bouncestatistics extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/bouncestatistics',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Bouncestatistics\\Get',
    ];

    /**
     * Bounce Statistics
     *
     * Retrieve a list of all bounce events and details about them - message, contact and campaign IDs, timestamp etc.
     *
     * > Note: If no query parameters are used, will return events with `FromTS` equal to the current day at 00:00 UTC.
     *
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Bouncestatistics $params = null): \MailjetSDK\Responses\V3\REST\Bouncestatistics\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Bouncestatistics\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_MESSAGE_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/bouncestatistics/{message_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Bouncestatistics\\ByMessageID\\Get',
    ];

    /**
     * Bounce Statistics by ID
     *
     * Retrieve information about a specific bounce event. To obtain a valid `message_ID`, first call `GET /v3/REST/message` to list your messages.
     */
    public function getByMessageID(int $message_ID): \MailjetSDK\Responses\V3\REST\Bouncestatistics\ByMessageID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Bouncestatistics\ByMessageID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MESSAGE_ID), path: ['message_ID' => $message_ID]);
        return $result;
    }
}
