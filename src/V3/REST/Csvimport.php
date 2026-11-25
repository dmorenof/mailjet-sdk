<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Csvimport extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/csvimport [operationId: post_v3_csvimport] */
    /**
     * Create CSV Import
     *
     * Add, remove or unsubscribe a list of contacts to/from a specific contact list by using a CSV uploaded to the Mailjet Data server. The CSV needs to be uploaded via the `/contactslist/{list_id}/CSVData/text:plain` endpoint.
     */
    public static function post(\MailjetSDK\DTOs\NewCsvimport $payload): \MailjetSDK\Responses\V3\REST\Csvimport\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Csvimport::class)->post($payload);
    }

    /** GET /v3/REST/csvimport/{importjob_ID} [operationId: get_v3_csvimport_id] */
    /**
     * CSV Import by ID
     *
     * View the settings and status of a contact CSV import job. The CSV needs to be uploaded via the `/contactslist/{list_id}/CSVData/text:plain endpoint` - only then can you create an import job. To obtain a valid `importjob_ID`, first call `GET /v3/REST/csvimport` to list your import jobs.
     */
    public static function getByImportjobID(int $importjob_ID): \MailjetSDK\Responses\V3\REST\Csvimport\ByImportjobID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Csvimport::class)->getByImportjobID($importjob_ID);
    }

    /** PUT /v3/REST/csvimport/{importjob_ID} [operationId: put_v3_csvimport_id] */
    /**
     * Update CSV Import
     *
     * Update or abort a contact CSV import job in progress. To obtain a valid `importjob_ID`, first call `GET /v3/REST/csvimport` to list your import jobs.
     */
    public static function putByImportjobID(int $importjob_ID, \MailjetSDK\DTOs\Update\Csvimport $payload): \MailjetSDK\Responses\V3\REST\Csvimport\ByImportjobID\Put
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Csvimport::class)->putByImportjobID($importjob_ID, $payload);
    }

}
