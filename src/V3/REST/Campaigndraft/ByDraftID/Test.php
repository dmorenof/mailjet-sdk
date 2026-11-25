<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Campaigndraft\ByDraftID;

final class Test extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/campaigndraft/{draft_ID}/test [operationId: post_v3_campaigndraft_id_test] */
    /**
     * Campaign Draft: Test
     *
     * Test a created campaign draft by sending it to a selection of recipients. The status of the campaign draft will not be affected by the test. To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public static function post(int $draft_ID, ?\MailjetSDK\DTOs\NewCampaigndraftTest $payload = null): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Test\Post
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID\Test::class)->post($draft_ID);
        }
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID\Test::class)->post($draft_ID, $payload);
    }

}
