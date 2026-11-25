<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Liststatistics extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/liststatistics',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Liststatistics\\Get',
    ];

    /**
     * List Statistics
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics, as well as general details and subscriber counts for all contact lists.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve aggregated statistics for contact lists.
     *
     *
     * @deprecated
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Liststatistics $params = null): \MailjetSDK\Responses\V3\REST\Liststatistics\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Liststatistics\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_LIST_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/liststatistics/{list_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Liststatistics\\ByListID\\Get',
    ];

    /**
     * List Statistics by ID
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics, as well as general details and subscriber count for a specific contact list.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve aggregated statistics for contact lists.
     *  To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     *
     * @deprecated
     */
    public function getByListID(int $list_ID): \MailjetSDK\Responses\V3\REST\Liststatistics\ByListID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Liststatistics\ByListID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_LIST_ID), path: ['list_ID' => $list_ID]);
        return $result;
    }

}
