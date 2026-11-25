<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Toplinkclicked extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/toplinkclicked [operationId: get_v3_toplinkclicked] */
    /**
     * Top Link Clicked List
     *
     * Retrieve a list of overall aggregated click statistics, grouped by URL.
     *
     * > Note: If no query parameters are used, will return stats with `FromTS` equal to the current day at 00:00 UTC.
     *
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Toplinkclicked $params = null): \MailjetSDK\Responses\V3\REST\Toplinkclicked\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Toplinkclicked::class)->get($params);
    }
}
