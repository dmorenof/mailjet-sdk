<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Openstatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/openstatistics [operationId: get_v3_openstatistics] */
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
    public static function get(?\MailjetSDK\GetParams\V3\REST\Openstatistics $params = null): \MailjetSDK\Responses\V3\REST\Openstatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Openstatistics::class)->get($params);
    }
}
