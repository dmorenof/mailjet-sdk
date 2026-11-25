<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Campaigndraft extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/campaigndraft [operationId: get_v3_campaigndraft] */
    /**
     * Campaign Draft List
     *
     * Retrieve details on the configuration of all campaign drafts. Newsletter and CampaignDraft objects are differentiated by the `EditMode` values. We recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Campaigndraft $params = null): \MailjetSDK\Responses\V3\REST\Campaigndraft\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft::class)->get($params);
    }

    /** POST /v3/REST/campaigndraft [operationId: post_v3_campaigndraft] */
    /**
     * Create Campaign Draft
     *
     * Create a new campaign draft. `Newsletter` and `CampaignDraft` objects are differentiated by the EditMode values - we recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder.
     */
    public static function post(\MailjetSDK\DTOs\NewCampaigndraft $payload): \MailjetSDK\Responses\V3\REST\Campaigndraft\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft::class)->post($payload);
    }

    /** GET /v3/REST/campaigndraft/{draft_ID} [operationId: get_v3_campaigndraft_id] */
    /**
     * Campaign Draft by ID
     *
     * Retrieve details on the configuration of a specific campaign draft. `Newsletter` and `CampaignDraft` objects are differentiated by the EditMode values - we recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder. To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public static function getByDraftID(int $draft_ID): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft::class)->getByDraftID($draft_ID);
    }

    /** PUT /v3/REST/campaigndraft/{draft_ID} [operationId: put_v3_campaigndraft_id] */
    /**
     * Update Campaign Draft
     *
     * Update the configuration settings of a specific campaign draft. `Newsletter` and `CampaignDraft` objects are differentiated by the EditMode values - we recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder. To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public static function putByDraftID(int $draft_ID, \MailjetSDK\DTOs\Update\Campaigndraft $payload): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft::class)->putByDraftID($draft_ID, $payload);
    }

}
