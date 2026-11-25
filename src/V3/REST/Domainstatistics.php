<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Domainstatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/domainstatistics [operationId: get_v3_domainstatistics] */
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
    public static function get(?\MailjetSDK\GetParams\V3\REST\Domainstatistics $params = null): \MailjetSDK\Responses\V3\REST\Domainstatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Domainstatistics::class)->get($params);
    }

}
