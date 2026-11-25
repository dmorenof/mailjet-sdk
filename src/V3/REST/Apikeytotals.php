<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Apikeytotals extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/apikeytotals [operationId: get_v3_apikeytotals] */
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
    public static function get(): \MailjetSDK\Responses\V3\REST\Apikeytotals\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Apikeytotals::class)->get();
    }
}
