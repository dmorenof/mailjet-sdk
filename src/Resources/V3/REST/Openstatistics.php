<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Openstatistics extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/openstatistics',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Openstatistics\\Get',
    ];

    /**
     * Open Statistics
     *
     * Retrieve aggregated statistics on emails opened at least once by their recipients. If no query parameters are used, the statistics shown will be for open events since 00:00 UTC on the current day.
     *
     * > Note: This is a legacy endpoint. We advise using /statcounters to retrieve message-based aggregated stats.
     *
     *
     * @deprecated
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Openstatistics $params = null): \MailjetSDK\Responses\V3\REST\Openstatistics\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Openstatistics\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
