<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Message extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/message',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Message\\Get',
    ];

    /**
     * Message List
     *
     * Get a list of messages with specific information on the type of content, tracking, sending and delivery.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Message $params = null): \MailjetSDK\Responses\V3\REST\Message\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Message\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_MESSAGE_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/message/{message_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Message\\ByMessageID\\Get',
    ];

    /**
     * Message by ID
     *
     * Retrieve specific information on the type of content, tracking, sending and delivery for a specific processed message. To obtain a valid `message_ID`, first call `GET /v3/REST/message` to list your messages.
     */
    public function getByMessageID(int $message_ID): \MailjetSDK\Responses\V3\REST\Message\ByMessageID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Message\ByMessageID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MESSAGE_ID), path: ['message_ID' => $message_ID]);
        return $result;
    }
}
