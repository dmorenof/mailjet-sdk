<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class User extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/user [operationId: get_v3_user] */
    /**
     * User List
     *
     * Get general information on your user settings and activity.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\User $params = null): \MailjetSDK\Responses\V3\REST\User\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\User::class)->get($params);
    }

    /** PUT /v3/REST/user [operationId: put_v3_user] */
    /**
     * Update User
     *
     * Update the settings of your User ID - username, registered email, language and time zone settings.
     */
    public static function put(\MailjetSDK\DTOs\Update\User $payload): \MailjetSDK\Responses\V3\REST\User\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\User::class)->put($payload);
    }
}
