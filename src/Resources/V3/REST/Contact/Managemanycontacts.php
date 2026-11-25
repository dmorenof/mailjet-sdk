<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Contact;

final class Managemanycontacts extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/contact/managemanycontacts',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contact\\Managemanycontacts\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewContactManagemanycontacts',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Contact: Manage Many Contacts
     *
     * Manage multiple contacts by adding, removing or unsubscribing them from multiple contact lists. Separate actions are set for each list and implemented for all contacts listed.
     *
     * Once you submit the `POST` request, it will return a `JobID`, which you can use to verify the success of the `POST` request, as well as see what kind of errors came up.
     *
     */
    public function post(\MailjetSDK\DTOs\NewContactManagemanycontacts $payload): \MailjetSDK\Responses\V3\REST\Contact\Managemanycontacts\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contact\Managemanycontacts\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_JOB_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/contact/managemanycontacts/{job_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contact\\Managemanycontacts\\ByJobID\\Get',
    ];

    /**
     * Get Contact: Manage Many Contacts
     *
     * Use the `JobID` generated after a `POST /contact/managemanycontacts` request to check its success, as well as any errors that might have occurred.
     */
    public function getByJobID(int $job_ID): \MailjetSDK\Responses\V3\REST\Contact\Managemanycontacts\ByJobID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contact\Managemanycontacts\ByJobID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_JOB_ID), path: ['job_ID' => $job_ID]);
        return $result;
    }

}
