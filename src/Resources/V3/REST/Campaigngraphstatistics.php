<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Campaigngraphstatistics extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/campaigngraphstatistics',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigngraphstatistics\\Get',
    ];

    /**
     * Campaign Graph Statistics
     *
     * Retrieve information on Open, Click, Spam and / or Unsubscribe events for selected campaigns, evolving overtime with intervals of 15 or 30 minutes. At least one of the event query parameters (`Click`, `Open`, `Spam`, `Unsub`) needs to be set to `true`.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve event evolution stats.
     *
     *
     * @deprecated
     */
    public function get(\MailjetSDK\GetParams\V3\REST\Campaigngraphstatistics $params): \MailjetSDK\Responses\V3\REST\Campaigngraphstatistics\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigngraphstatistics\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_CAMPAIGN_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/campaigngraphstatistics/{campaign_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigngraphstatistics\\ByCampaignID\\Get',
    ];

    /**
     * Campaign Graph Statistics by ID
     *
     * Retrieve information on Open, Click, Spam and / or Unsubscribe events for a specific campaign, evolving overtime with intervals of 15 or 30 minutes. At least one of the event query parameters (`Click`, `Open`, `Spam`, `Unsub`) needs to be set to `true`.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve event evolution stats.
     *  To obtain a valid `campaign_ID`, first call `GET /v3/REST/campaign` to list your campaigns.
     *
     * @deprecated
     */
    public function getByCampaignID(int $campaign_ID, ?\MailjetSDK\GetParams\V3\REST\Campaigngraphstatistics\ByCampaignID $params = null): \MailjetSDK\Responses\V3\REST\Campaigngraphstatistics\ByCampaignID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigngraphstatistics\ByCampaignID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CAMPAIGN_ID), path: ['campaign_ID' => $campaign_ID], parameters: $params);
        return $result;
    }

}
