<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Statistics;

final class RecipientEsp extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/statistics/recipient-esp',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Statistics\\RecipientEsp\\Get',
    ];

    /**
     * Recipient ESP Statistics
     *
     * Get aggregated delivery and engagement statistics, grouped by recipient Email Service Provider (ESP).
     *
     */
    public function get(\MailjetSDK\GetParams\V3\REST\Statistics\RecipientEsp $params): \MailjetSDK\Responses\V3\REST\Statistics\RecipientEsp\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Statistics\RecipientEsp\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
