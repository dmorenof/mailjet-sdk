<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Graphstatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/graphstatistics [operationId: get_v3_graphstatistics] */
    /**
     * Graph Statistics
     *
     * Retrieve information on the evolution of statistics by grouping them by time intervals. You need to specify the time intervals with the `Scale` query parameter, as well as the overall time period with `Period` or `FromTS` and `ToTS`.
     *
     * > Note: This is a legacy endpoint. We advise using `/statcounters` to retrieve information on the evolution of statistics.
     *
     *
     * @deprecated
     */
    public static function get(\MailjetSDK\GetParams\V3\REST\Graphstatistics $params): \MailjetSDK\Responses\V3\REST\Graphstatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Graphstatistics::class)->get($params);
    }
}
