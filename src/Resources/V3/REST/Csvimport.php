<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Csvimport extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/csvimport',
        'security' => [
            [
                'basicAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            404 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            429 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Csvimport\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewCsvimport',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create CSV Import
     *
     * Add, remove or unsubscribe a list of contacts to/from a specific contact list by using a CSV uploaded to the Mailjet Data server. The CSV needs to be uploaded via the `/contactslist/{list_id}/CSVData/text:plain` endpoint.
     */
    public function post(\MailjetSDK\DTOs\NewCsvimport $payload): \MailjetSDK\Responses\V3\REST\Csvimport\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Csvimport\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_IMPORTJOB_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/csvimport/{importjob_ID}',
        'security' => [
            [
                'basicAuth' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            404 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            429 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Csvimport\\ByImportjobID\\Get',
    ];

    /**
     * CSV Import by ID
     *
     * View the settings and status of a contact CSV import job. The CSV needs to be uploaded via the `/contactslist/{list_id}/CSVData/text:plain endpoint` - only then can you create an import job. To obtain a valid `importjob_ID`, first call `GET /v3/REST/csvimport` to list your import jobs.
     */
    public function getByImportjobID(int $importjob_ID): \MailjetSDK\Responses\V3\REST\Csvimport\ByImportjobID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Csvimport\ByImportjobID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_IMPORTJOB_ID), path: ['importjob_ID' => $importjob_ID]);
        return $result;
    }

    private const array PUT_BY_IMPORTJOB_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/csvimport/{importjob_ID}',
        'security' => [
            [
                'basicAuth' => [],
            ],
        ],
        'errors' => [
            400 => null,
            401 => null,
            403 => null,
            404 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            429 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Csvimport\\ByImportjobID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Csvimport',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update CSV Import
     *
     * Update or abort a contact CSV import job in progress. To obtain a valid `importjob_ID`, first call `GET /v3/REST/csvimport` to list your import jobs.
     */
    public function putByImportjobID(int $importjob_ID, \MailjetSDK\DTOs\Update\Csvimport $payload): \MailjetSDK\Responses\V3\REST\Csvimport\ByImportjobID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Csvimport\ByImportjobID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_IMPORTJOB_ID), $payload, path: ['importjob_ID' => $importjob_ID]);
        return $result;
    }

}
