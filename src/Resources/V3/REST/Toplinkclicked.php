<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Toplinkclicked extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/toplinkclicked',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Toplinkclicked\\Get',
    ];

    /**
     * Top Link Clicked List
     *
     * Retrieve a list of overall aggregated click statistics, grouped by URL.
     *
     * > Note: If no query parameters are used, will return stats with `FromTS` equal to the current day at 00:00 UTC.
     *
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Toplinkclicked $params = null): \MailjetSDK\Responses\V3\REST\Toplinkclicked\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Toplinkclicked\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
