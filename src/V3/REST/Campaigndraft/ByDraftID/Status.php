<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Campaigndraft\ByDraftID;

final class Status extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/campaigndraft/{draft_ID}/status [operationId: get_v3_campaigndraft_id_status] */
    /**
     * Get Campaign Draft: Status
     *
     * View the sending status of a campaign draft. To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public static function get(int $draft_ID): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Status\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID\Status::class)->get($draft_ID);
    }

}
