<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Campaignoverview extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/campaignoverview',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaignoverview\\Get',
    ];

    /**
     * Campaign Overview List
     *
     * Retrieve delivery and engagement statistics for all drafts, AB Testing objects or sent campaigns. In addition, for each object you will see its type, edit tool used and creation time, as well as general info like the title and subject line for the campaign.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Campaignoverview $params = null): \MailjetSDK\Responses\V3\REST\Campaignoverview\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaignoverview\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/campaignoverview/{ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaignoverview\\ByID\\Get',
    ];

    /**
     * Campaign Overview by ID
     *
     * Retrieve information about a specific draft, AB Testing object or sent campaign. You will see its type, edit tool used and creation time, as well as general info like the title and subject line for the campaign.
     */
    public function getByID(string $ID): \MailjetSDK\Responses\V3\REST\Campaignoverview\ByID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaignoverview\ByID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['ID' => $ID]);
        return $result;
    }

}
