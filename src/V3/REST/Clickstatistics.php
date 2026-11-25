<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Clickstatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/clickstatistics [operationId: get_v3_clickstatistics] */
    /**
     * Click Statistics
     *
     * Retrieve a list of all click events and details about them - message and contact IDs, timestamp, URL and click delay.
     *
     * > Note: If no query parameters are used, will return events with `FromTS` equal to the current day at 00:00 UTC.
     *
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Clickstatistics $params = null): \MailjetSDK\Responses\V3\REST\Clickstatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Clickstatistics::class)->get($params);
    }
}
