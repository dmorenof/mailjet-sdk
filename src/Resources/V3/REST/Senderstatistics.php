<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Senderstatistics extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/senderstatistics',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Senderstatistics\\Get',
    ];

    /**
     * Sender Statistics
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics, grouped by sender ID.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve aggregated statistics for senders.
     *
     *
     * @deprecated
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Senderstatistics $params = null): \MailjetSDK\Responses\V3\REST\Senderstatistics\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Senderstatistics\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_SENDER_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/senderstatistics/{sender_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Senderstatistics\\BySenderID\\Get',
    ];

    /**
     * Sender Statistics by ID
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics for a specific sender ID.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve aggregated statistics for senders.
     *  To obtain a valid `sender_ID`, first call `GET /v3/REST/sender` to list your senders.
     *
     * @deprecated
     */
    public function getBySenderID(int $sender_ID): \MailjetSDK\Responses\V3\REST\Senderstatistics\BySenderID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Senderstatistics\BySenderID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SENDER_ID), path: ['sender_ID' => $sender_ID]);
        return $result;
    }

}
