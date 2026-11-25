<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Contactslist\ByListID;

final class Verify extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/contactslist/{list_ID}/verify',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslist\\ByListID\\Verify\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewContactslistVerify',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Contact List: Verify
     *
     * Creates a job to verify a contact list. The job will process the contact list for verification  and `GET /contactslist/{list_ID}/verify/{job_ID}` can be used to retrieve results of the job. Typically, processing will complete in less than 5 minutes. We recommend calling `GET /contactslist/{list_ID/verify/{job_ID}` every 30 seconds to poll for results. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public function post(int $list_ID, \MailjetSDK\DTOs\NewContactslistVerify $payload): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Verify\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Verify\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['list_ID' => $list_ID]);
        return $result;
    }

    private const array GET_BY_JOB_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/contactslist/{list_ID}/verify/{job_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslist\\ByListID\\Verify\\ByJobID\\Get',
    ];

    /**
     * Get Contact List: Verify
     *
     * The contact list verification job created by a successful `POST /contactslist/{list_id}/verify` may progress through multiple states and ultimately remain in a successful or failed state with associated data. We encourage calls to this at a rate of once every 30 seconds. Typically, jobs resolve to final status within 5 minutes. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public function getByJobID(\MailjetSDK\PathParams\V3\REST\Contactslist\ByListID\Verify\ByJobID $identifier): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Verify\ByJobID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Verify\ByJobID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_JOB_ID), path: $identifier);
        return $result;
    }
}
