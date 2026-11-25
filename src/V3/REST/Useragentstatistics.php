<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Useragentstatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/useragentstatistics [operationId: get_v3_useragentstatistics] */
    /**
     * User Agent Statistics
     *
     * Retrieve a list of open or click statistics, grouped by web browser or email client.
     *
     * > Note: If no query parameters are used, will return stats with `FromTS` equal to the current day at 00:00 UTC.
     *
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Useragentstatistics $params = null): \MailjetSDK\Responses\V3\REST\Useragentstatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Useragentstatistics::class)->get($params);
    }

}
