<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Messagestatistics extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/messagestatistics',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Messagestatistics\\Get',
    ];

    /**
     * Message Statistics
     *
     * Retrieve message-based aggregated delivery and engagement statistics. Message-based stats link the delivery rates / contact engagement details to the sending time of the messages. If no query parameters are used, the stats shown will be for messages sent since 00:00 UTC on the current day.
     *
     * > Note: This is a legacy endpoint. We advise using /statcounters to retrieve message-based aggregated stats.
     *
     *
     * @deprecated
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Messagestatistics $params = null): \MailjetSDK\Responses\V3\REST\Messagestatistics\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Messagestatistics\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_MESSAGE_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/messagestatistics/{message_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Messagestatistics\\ByMessageID\\Get',
    ];

    /**
     * Message Statistics by ID
     *
     * Retrieve delivery and engagement statistics for a specific message. Message-based stats link the delivery rates / contact engagement details to the sending time of the messages. To obtain a valid `message_ID`, first call `GET /v3/REST/message` to list your messages. This endpoint does not support retrieval by individual message ID and always returns global statistics, regardless of the `message_ID` supplied.
     *
     * @deprecated
     */
    public function getByMessageID(int $message_ID): \MailjetSDK\Responses\V3\REST\Messagestatistics\ByMessageID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Messagestatistics\ByMessageID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MESSAGE_ID), path: ['message_ID' => $message_ID]);
        return $result;
    }

}
