<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Campaignoverview extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/campaignoverview [operationId: get_v3_campaignoverview] */
    /**
     * Campaign Overview List
     *
     * Retrieve delivery and engagement statistics for all drafts, AB Testing objects or sent campaigns. In addition, for each object you will see its type, edit tool used and creation time, as well as general info like the title and subject line for the campaign.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Campaignoverview $params = null): \MailjetSDK\Responses\V3\REST\Campaignoverview\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaignoverview::class)->get($params);
    }

    /** GET /v3/REST/campaignoverview/{ID} [operationId: get_v3_campaignoverview_id] */
    /**
     * Campaign Overview by ID
     *
     * Retrieve information about a specific draft, AB Testing object or sent campaign. You will see its type, edit tool used and creation time, as well as general info like the title and subject line for the campaign.
     */
    public static function getByID(string $ID): \MailjetSDK\Responses\V3\REST\Campaignoverview\ByID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaignoverview::class)->getByID($ID);
    }

}
