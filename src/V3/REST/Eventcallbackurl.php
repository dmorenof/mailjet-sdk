<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Eventcallbackurl extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/eventcallbackurl [operationId: get_v3_eventcallbackurl] */
    /**
     * Event Callback URL List
     *
     * Retrieve a list of all callback URL objects and their configuration settings. Whenever an action (e.g. email open) occurs, the information about it will be sent to the selected callback URL. You can then set up different automation workflows triggered by the tracked actions.
     *
     * > Note: The URL provided cannot be a root URL.
     *
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Eventcallbackurl $params = null): \MailjetSDK\Responses\V3\REST\Eventcallbackurl\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Eventcallbackurl::class)->get($params);
    }

    /** POST /v3/REST/eventcallbackurl [operationId: post_v3_eventcallbackurl] */
    /**
     * Create Event Callback URL
     *
     * Add a new callback URL used as a webhook to track different email actions. Whenever an action (e.g. email open) occurs, the information about it will be sent to this callback URL. You can then set up different automation workflows triggered by the tracked actions.
     *
     * > Note: The URL provided cannot be a root URL.
     *
     */
    public static function post(\MailjetSDK\DTOs\NewEventcallbackurl $payload): \MailjetSDK\Responses\V3\REST\Eventcallbackurl\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Eventcallbackurl::class)->post($payload);
    }

    /** DELETE /v3/REST/eventcallbackurl/{url_ID} [operationId: delete_v3_eventcallbackurl_id] */
    /**
     * Delete Event Callback URL
     *
     * Delete an existing callback URL.
     */
    public static function deleteByUrlID(int $url_ID): void
    {
        self::client()->resource(\MailjetSDK\Resources\V3\REST\Eventcallbackurl::class)->deleteByUrlID($url_ID);
    }

    /** GET /v3/REST/eventcallbackurl/{url_ID} [operationId: get_v3_eventcallbackurl_id] */
    /**
     * Event Callback URL by ID
     *
     * Retrieve the configuration settings of a specific callback URL. Whenever an action (e.g. email open) occurs, the information about it will be sent to the selected callback URL. You can then set up different automation workflows triggered by the tracked actions.
     *
     * > Note: The URL provided cannot be a root URL.
     *  To obtain a valid `url_ID`, first call `GET /v3/REST/eventcallbackurl` to list your callback URLs.
     */
    public static function getByUrlID(int $url_ID): \MailjetSDK\Responses\V3\REST\Eventcallbackurl\ByUrlID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Eventcallbackurl::class)->getByUrlID($url_ID);
    }

    /** PUT /v3/REST/eventcallbackurl/{url_ID} [operationId: put_v3_eventcallbackurl_id] */
    /**
     * Update Event Callback URL
     *
     * Update the configuration settings of an existing callback URL - which type of events it tracks, the URL used, whether it is active or not etc. To obtain a valid `url_ID`, first call `GET /v3/REST/eventcallbackurl` to list your callback URLs.
     */
    public static function putByUrlID(int $url_ID, \MailjetSDK\DTOs\Update\Eventcallbackurl $payload): \MailjetSDK\Responses\V3\REST\Eventcallbackurl\ByUrlID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Eventcallbackurl::class)->putByUrlID($url_ID, $payload);
    }

}
