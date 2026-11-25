<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Graphstatistics extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/graphstatistics',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Graphstatistics\\Get',
    ];

    /**
     * Graph Statistics
     *
     * Retrieve information on the evolution of statistics by grouping them by time intervals. You need to specify the time intervals with the `Scale` query parameter, as well as the overall time period with `Period` or `FromTS` and `ToTS`.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve information on the evolution of statistics.
     *
     *
     * @deprecated
     */
    public function get(\MailjetSDK\GetParams\V3\REST\Graphstatistics $params): \MailjetSDK\Responses\V3\REST\Graphstatistics\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Graphstatistics\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
