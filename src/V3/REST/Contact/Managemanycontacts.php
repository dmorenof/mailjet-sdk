<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Contact;

final class Managemanycontacts extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/contact/managemanycontacts [operationId: post_v3_contact_managemanycontacts] */
    /**
     * Contact: Manage Many Contacts
     *
     * Manage multiple contacts by adding, removing or unsubscribing them from multiple contact lists. Separate actions are set for each list and implemented for all contacts listed.
     *
     * Once you submit the `POST` request, it will return a `JobID`, which you can use to verify the success of the `POST` request, as well as see what kind of errors came up.
     *
     */
    public static function post(\MailjetSDK\DTOs\NewContactManagemanycontacts $payload): \MailjetSDK\Responses\V3\REST\Contact\Managemanycontacts\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contact\Managemanycontacts::class)->post($payload);
    }

    /** GET /v3/REST/contact/managemanycontacts/{job_ID} [operationId: get_v3_contact_managemanycontacts_id] */
    /**
     * Get Contact: Manage Many Contacts
     *
     * Use the `JobID` generated after a `POST /contact/managemanycontacts` request to check its success, as well as any errors that might have occurred.
     */
    public static function getByJobID(int $job_ID): \MailjetSDK\Responses\V3\REST\Contact\Managemanycontacts\ByJobID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contact\Managemanycontacts::class)->getByJobID($job_ID);
    }
}
