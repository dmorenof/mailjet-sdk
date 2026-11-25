<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Contactslist\ByListID;

final class Verify extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/contactslist/{list_ID}/verify [operationId: post_v3_contactslist_id_verify] */
    /**
     * Contact List: Verify
     *
     * Creates a job to verify a contact list. The job will process the contact list for verification  and `GET /contactslist/{list_ID}/verify/{job_ID}` can be used to retrieve results of the job. Typically, processing will complete in less than 5 minutes. We recommend calling `GET /contactslist/{list_ID/verify/{job_ID}` every 30 seconds to poll for results. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public static function post(int $list_ID, \MailjetSDK\DTOs\NewContactslistVerify $payload): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Verify\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslist\ByListID\Verify::class)->post($list_ID, $payload);
    }

    /** GET /v3/REST/contactslist/{list_ID}/verify/{job_ID} [operationId: get_v3_contactslist_id_verify_id] */
    /**
     * Get Contact List: Verify
     *
     * The contact list verification job created by a successful `POST /contactslist/{list_id}/verify` may progress through multiple states and ultimately remain in a successful or failed state with associated data. We encourage calls to this at a rate of once every 30 seconds. Typically, jobs resolve to final status within 5 minutes. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public static function getByJobID(\MailjetSDK\PathParams\V3\REST\Contactslist\ByListID\Verify\ByJobID $identifier): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Verify\ByJobID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactslist\ByListID\Verify::class)->getByJobID($identifier);
    }

}
