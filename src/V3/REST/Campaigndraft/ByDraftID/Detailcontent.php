<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Campaigndraft\ByDraftID;

final class Detailcontent extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/campaigndraft/{draft_ID}/detailcontent [operationId: get_v3_campaigndraft_id_detailcontent] */
    /**
     * Get Campaign Draft: Detail Content
     *
     * Retrieve the content of your campaign draft email. It will be split between a Text part, HTML part, MJML content and/or additional headers. To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public static function get(int $draft_ID): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Detailcontent\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID\Detailcontent::class)->get($draft_ID);
    }

    /** POST /v3/REST/campaigndraft/{draft_ID}/detailcontent [operationId: post_v3_campaigndraft_id_detailcontent] */
    /**
     * Campaign Draft: Detail Content
     *
     * Create, update or delete the content of your campaign draft email. You can select a Text part, HTML part, MJML content, as well as additional headers.
     *
     * Each `POST` request overwrites any content previously added - e.g. if you have submitted HTML content on the initial `POST`, and on the next you only submit Text content, the previously saved value of `Html-part` will be deleted.
     *  To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public static function post(int $draft_ID, \MailjetSDK\DTOs\NewCampaigndraftDetailcontent $payload): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Detailcontent\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID\Detailcontent::class)->post($draft_ID, $payload);
    }
}
