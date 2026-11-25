<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Campaigngraphstatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/campaigngraphstatistics [operationId: get_v3_campaigngraphstatistics] */
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
    public static function get(\MailjetSDK\GetParams\V3\REST\Campaigngraphstatistics $params): \MailjetSDK\Responses\V3\REST\Campaigngraphstatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigngraphstatistics::class)->get($params);
    }

    /** GET /v3/REST/campaigngraphstatistics/{campaign_ID} [operationId: get_v3_campaigngraphstatistics_id] */
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
    public static function getByCampaignID(int $campaign_ID, ?\MailjetSDK\GetParams\V3\REST\Campaigngraphstatistics\ByCampaignID $params = null): \MailjetSDK\Responses\V3\REST\Campaigngraphstatistics\ByCampaignID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigngraphstatistics::class)->getByCampaignID($campaign_ID, $params);
    }

}
