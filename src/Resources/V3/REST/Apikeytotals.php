<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Apikeytotals extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/apikeytotals',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Apikeytotals\\Get',
    ];

    /**
     * API Key Totals
     *
     * Retrieve overall aggregated delivery and engagement statistics for the API Key used for authentication.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve aggregated stats grouped by API Key.
     *
     *
     * @deprecated
     */
    public function get(): \MailjetSDK\Responses\V3\REST\Apikeytotals\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Apikeytotals\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
