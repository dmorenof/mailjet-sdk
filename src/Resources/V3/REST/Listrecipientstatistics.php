<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Listrecipientstatistics extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/listrecipientstatistics',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Listrecipientstatistics\\Get',
    ];

    /**
     * List Recipient Statistics
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics for all list recipients. A list recipient object manages the relationship between a `contact` and a `contactslist` - every instance of a contact being added to a list creates a new list recipient.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Listrecipientstatistics $params = null): \MailjetSDK\Responses\V3\REST\Listrecipientstatistics\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Listrecipientstatistics\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_LISTRECIPIENT_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/listrecipientstatistics/{listrecipient_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Listrecipientstatistics\\ByListrecipientID\\Get',
    ];

    /**
     * List Recipient Statistics by ID
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics for a specific list recipient. To obtain a valid `listrecipient_ID`, first call `GET /v3/REST/listrecipient` to list your list recipients.
     */
    public function getByListrecipientID(int $listrecipient_ID): \MailjetSDK\Responses\V3\REST\Listrecipientstatistics\ByListrecipientID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Listrecipientstatistics\ByListrecipientID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_LISTRECIPIENT_ID), path: ['listrecipient_ID' => $listrecipient_ID]);
        return $result;
    }

}
