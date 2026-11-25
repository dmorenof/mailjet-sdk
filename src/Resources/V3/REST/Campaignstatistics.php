<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Campaignstatistics extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/campaignstatistics',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaignstatistics\\Get',
    ];

    /**
     * Campaign Statistics
     *
     * Retrieve aggregated delivery and engagement statistics grouped by campaign.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve aggregated stats for campaigns.
     *
     *
     * @deprecated
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Campaignstatistics $params = null): \MailjetSDK\Responses\V3\REST\Campaignstatistics\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaignstatistics\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_CAMPAIGN_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/campaignstatistics/{campaign_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaignstatistics\\ByCampaignID\\Get',
    ];

    /**
     * Campaign Statistics by ID
     *
     * Retrieve general information, as well as aggregated delivery and engagement statistics for a specific campaign.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve aggregated stats for campaigns.
     *  To obtain a valid `campaign_ID`, first call `GET /v3/REST/campaign` to list your campaigns.
     *
     * @deprecated
     */
    public function getByCampaignID(int $campaign_ID): \MailjetSDK\Responses\V3\REST\Campaignstatistics\ByCampaignID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaignstatistics\ByCampaignID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CAMPAIGN_ID), path: ['campaign_ID' => $campaign_ID]);
        return $result;
    }

}
