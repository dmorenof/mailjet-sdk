<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Statistics;

final class LinkClick extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/statistics/link-click',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Statistics\\LinkClick\\Get',
    ];

    /**
     * Link Click Statistics
     *
     * Retrieve aggregated click statistics for a campaign, grouped by URL links. Links will be identified by their URL and position index within the campaign template.
     *
     */
    public function get(\MailjetSDK\GetParams\V3\REST\Statistics\LinkClick $params): \MailjetSDK\Responses\V3\REST\Statistics\LinkClick\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Statistics\LinkClick\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
