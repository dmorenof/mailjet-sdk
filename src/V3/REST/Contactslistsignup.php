<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Contactslistsignup extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/contactslistsignup [operationId: get_v3_contactslistsignup] */
    /**
     * Contact List Signup List
     *
     * Retrieve details about all contact list signup requests via a subscription widget. Provides details on signup and subscription confirmation IPs, timestamp, subscription source etc.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Contactslistsignup $params = null): \MailjetSDK\Responses\V3\REST\Contactslistsignup\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslistsignup::class)->get($params);
    }

    /** GET /v3/REST/contactslistsignup/{signuprequest_ID} [operationId: get_v3_contactslistsignup_id] */
    /**
     * Contact List Signup by ID
     *
     * Retrieve details about a specific subscription request done via a subscription widget. Provides details on signup and subscription confirmation IP, timestamp, subscription source etc. To obtain a valid `signuprequest_ID`, first call `GET /v3/REST/contactslistsignup` to list your subscription requests.
     */
    public static function getBySignuprequestID(int $signuprequest_ID): \MailjetSDK\Responses\V3\REST\Contactslistsignup\BySignuprequestID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslistsignup::class)->getBySignuprequestID($signuprequest_ID);
    }

}
