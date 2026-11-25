<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Sender extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/sender [operationId: get_v3_sender] */
    /**
     * Sender List
     *
     * Get information on a list of sender email addresses and/or domains. The e-mail address or domain has to be registered and validated before being used to send e-mails. Validation is done via `/sender/{sender_id}/validate`. In order to manage a sender available across multiple API Keys, see the related `/metasender` resource.
     *
     * > Note: The maximum number of senders and metasenders per user is 100. This includes both validated (`Active`) and non-validated (`Inactive`) ones, but does not include `Deleted` senders / metasenders.
     *
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Sender $params = null): \MailjetSDK\Responses\V3\REST\Sender\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Sender::class)->get($params);
    }

    /** POST /v3/REST/sender [operationId: post_v3_sender] */
    /**
     * Create Sender
     *
     * Create a new sender email address or domain. The e-mail address or domain has to be registered and validated before being used to send e-mails. Validation is done via `/sender/{sender_id}/validate`. In order to manage a sender available across multiple API Keys, see the related /metasender resource.
     *
     * > Note: The maximum number of senders and metasenders per user is 100. This includes both validated (`Active`) and non-validated (`Inactive`) ones, but does not include `Deleted` senders / metasenders.
     *
     */
    public static function post(\MailjetSDK\DTOs\NewSender $payload): \MailjetSDK\Responses\V3\REST\Sender\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Sender::class)->post($payload);
    }

    /** DELETE /v3/REST/sender/{sender_ID} [operationId: delete_v3_sender_id] */
    /**
     * Delete Sender
     *
     * Delete an existing sender email address or domain.
     */
    public static function deleteBySenderID(int $sender_ID): void
    {
        self::client()->resource(\MailjetSDK\Resources\V3\REST\Sender::class)->deleteBySenderID($sender_ID);
    }

    /** GET /v3/REST/sender/{sender_ID} [operationId: get_v3_sender_id] */
    /**
     * Sender by ID
     *
     * Retrieve details on a specific sender email address or domain. To obtain a valid `sender_ID`, first call `GET /v3/REST/sender` to list your senders.
     */
    public static function getBySenderID(int $sender_ID): \MailjetSDK\Responses\V3\REST\Sender\BySenderID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Sender::class)->getBySenderID($sender_ID);
    }

    /** PUT /v3/REST/sender/{sender_ID} [operationId: put_v3_sender_id] */
    /**
     * Update Sender
     *
     * Update an existing sender email address or domain. To obtain a valid `sender_ID`, first call `GET /v3/REST/sender` to list your senders.
     */
    public static function putBySenderID(int $sender_ID, \MailjetSDK\DTOs\Update\Sender $payload): \MailjetSDK\Responses\V3\REST\Sender\BySenderID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Sender::class)->putBySenderID($sender_ID, $payload);
    }

}
