<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Myprofile extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/myprofile [operationId: get_v3_myprofile] */
    /**
     * My Profile
     *
     * Manage your user profile data such as address, payment information etc.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Myprofile $params = null): \MailjetSDK\Responses\V3\REST\Myprofile\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Myprofile::class)->get($params);
    }

    /** PUT /v3/REST/myprofile [operationId: put_v3_myprofile] */
    /**
     * Update My Profile
     *
     * Update your profile information - personal and organization settings.
     */
    public static function put(\MailjetSDK\DTOs\Update\Myprofile $payload): \MailjetSDK\Responses\V3\REST\Myprofile\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Myprofile::class)->put($payload);
    }

}
