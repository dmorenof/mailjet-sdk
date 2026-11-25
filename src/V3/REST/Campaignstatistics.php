<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Campaignstatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/campaignstatistics [operationId: get_v3_campaignstatistics] */
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
    public static function get(?\MailjetSDK\GetParams\V3\REST\Campaignstatistics $params = null): \MailjetSDK\Responses\V3\REST\Campaignstatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaignstatistics::class)->get($params);
    }

    /** GET /v3/REST/campaignstatistics/{campaign_ID} [operationId: get_v3_campaignstatistics_id] */
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
    public static function getByCampaignID(int $campaign_ID): \MailjetSDK\Responses\V3\REST\Campaignstatistics\ByCampaignID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaignstatistics::class)->getByCampaignID($campaign_ID);
    }
}
