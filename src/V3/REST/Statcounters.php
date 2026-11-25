<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Statcounters extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/statcounters [operationId: get_v3_statcounters] */
    /**
     * Stat Counters List
     *
     * Get aggregated statistics for a specific campaign, list, API Key or sender email address. Both message-based and event-based stats can be retrieved.
     *
     */
    public static function get(\MailjetSDK\GetParams\V3\REST\Statcounters $params): \MailjetSDK\Responses\V3\REST\Statcounters\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Statcounters::class)->get($params);
    }

}
