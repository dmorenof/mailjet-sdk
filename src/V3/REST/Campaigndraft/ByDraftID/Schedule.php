<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Campaigndraft\ByDraftID;

final class Schedule extends \MailjetSDK\MailjetAPISDK
{
    /** DELETE /v3/REST/campaigndraft/{draft_ID}/schedule [operationId: delete_v3_campaigndraft_id_schedule] */
    /**
     * Delete Campaign Draft: Schedule
     *
     * Cancel the scheduled sending of a campaign draft.
     */
    public static function delete(int $draft_ID): void
    {
        self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID\Schedule::class)->delete($draft_ID);
    }

    /** GET /v3/REST/campaigndraft/{draft_ID}/schedule [operationId: get_v3_campaigndraft_id_schedule] */
    /**
     * Get Campaign Draft: Schedule
     *
     * Retrieve the sending schedule of a campaign draft. To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public static function get(int $draft_ID): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Schedule\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID\Schedule::class)->get($draft_ID);
    }

    /** POST /v3/REST/campaigndraft/{draft_ID}/schedule [operationId: post_v3_campaigndraft_id_schedule] */
    /**
     * Campaign Draft: Schedule
     *
     * Schedule the sending of a campaign draft.
     */
    public static function post(int $draft_ID, \MailjetSDK\DTOs\NewCampaigndraftSchedule $payload): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Schedule\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID\Schedule::class)->post($draft_ID, $payload);
    }

    /** PUT /v3/REST/campaigndraft/{draft_ID}/schedule [operationId: put_v3_campaigndraft_id_schedule] */
    /**
     * Update Campaign Draft: Schedule
     *
     * Update the sending schedule of a campaign draft.
     */
    public static function put(int $draft_ID, \MailjetSDK\DTOs\Update\CampaigndraftSchedule $payload): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Schedule\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID\Schedule::class)->put($draft_ID, $payload);
    }
}
