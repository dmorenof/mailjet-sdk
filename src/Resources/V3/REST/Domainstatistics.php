<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Domainstatistics extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/domainstatistics',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Domainstatistics\\Get',
    ];

    /**
     * Domain Statistics
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics, grouped by recipient domain. If no query parameters are used in the path URL, only information about messages sent since 00:00 UTC on the current day will be returned.
     *
     * > Note: This is a legacy endpoint. We advise using `/statistics/recipient-esp` to retrieve aggregated domain stats.
     *
     *
     * @deprecated
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Domainstatistics $params = null): \MailjetSDK\Responses\V3\REST\Domainstatistics\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Domainstatistics\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
