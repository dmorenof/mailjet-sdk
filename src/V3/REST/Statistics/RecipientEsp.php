<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Statistics;

final class RecipientEsp extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/statistics/recipient-esp [operationId: get_v3_statistics_recipient_esp] */
    /**
     * Recipient ESP Statistics
     *
     * Get aggregated delivery and engagement statistics, grouped by recipient Email Service Provider (ESP).
     *
     */
    public static function get(\MailjetSDK\GetParams\V3\REST\Statistics\RecipientEsp $params): \MailjetSDK\Responses\V3\REST\Statistics\RecipientEsp\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Statistics\RecipientEsp::class)->get($params);
    }

}
