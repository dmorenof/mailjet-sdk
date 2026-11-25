<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Metasender extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/metasender [operationId: get_v3_metasender] */
    /**
     * Meta Sender List
     *
     * Retrieve a list of all metasenders and their configuration settings. A metasender is a sender available for use by the Primary API Key and all sub-accounts. The e-mail address or domain has to be registered and validated before being used to send e-mails. Validation is done by contacting the Mailjet Support team. In order to manage a sender available for a single API Key, see the related `/sender` resource.
     *
     * > Note: The maximum number of senders and metasenders per user is 100. This includes both validated (`Active`) and non-validated (`Inactive`) ones, but does not include Deleted senders / metasenders.
     *
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Metasender $params = null): \MailjetSDK\Responses\V3\REST\Metasender\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Metasender::class)->get($params);
    }

    /** POST /v3/REST/metasender [operationId: post_v3_metasender] */
    /**
     * Create Meta Sender
     *
     * Create a new metasender email address or domain. A metasender is a sender available for use by the Primary API Key and all sub-accounts. The e-mail address or domain has to be registered and validated before being used to send e-mails. Validation is done by contacting the Mailjet Support team. In order to manage a sender available for a single API Key, see the related `/sender` resource.
     *
     * > Note: The maximum number of senders and metasenders per user is 100. This includes both validated (`Active`) and non-validated (`Inactive`) ones, but does not include Deleted senders / metasenders.
     *
     */
    public static function post(\MailjetSDK\DTOs\NewMetasender $payload): \MailjetSDK\Responses\V3\REST\Metasender\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Metasender::class)->post($payload);
    }

    /** GET /v3/REST/metasender/{metasender_ID} [operationId: get_v3_metasender_id] */
    /**
     * Meta Sender by ID
     *
     * Retrieve an existing metasender object and its configuration settings. To obtain a valid `metasender_ID`, first call `GET /v3/REST/metasender` to list your metasenders.
     */
    public static function getByMetasenderID(int $metasender_ID): \MailjetSDK\Responses\V3\REST\Metasender\ByMetasenderID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Metasender::class)->getByMetasenderID($metasender_ID);
    }

    /** PUT /v3/REST/metasender/{metasender_ID} [operationId: put_v3_metasender_id] */
    /**
     * Update Metasender
     *
     * Update and existing metasender email address or domain. Only the email address and description can be updated. To obtain a valid `metasender_ID`, first call `GET /v3/REST/metasender` to list your metasenders.
     */
    public static function putByMetasenderID(int $metasender_ID, \MailjetSDK\DTOs\Update\Metasender $payload): \MailjetSDK\Responses\V3\REST\Metasender\ByMetasenderID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Metasender::class)->putByMetasenderID($metasender_ID, $payload);
    }

}
