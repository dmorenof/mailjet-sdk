<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Statistics;

final class LinkClick extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/statistics/link-click [operationId: get_v3_statistics_link_click] */
    /**
     * Link Click Statistics
     *
     * Retrieve aggregated click statistics for a campaign, grouped by URL links. Links will be identified by their URL and position index within the campaign template.
     *
     */
    public static function get(\MailjetSDK\GetParams\V3\REST\Statistics\LinkClick $params): \MailjetSDK\Responses\V3\REST\Statistics\LinkClick\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Statistics\LinkClick::class)->get($params);
    }
}
