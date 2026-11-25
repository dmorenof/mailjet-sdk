<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Contactslist\ByListID;

final class Managemanycontacts extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/contactslist/{list_ID}/managemanycontacts',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslist\\ByListID\\Managemanycontacts\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewContactslistManageManyContacts',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Contact List: Manage Many Contacts
     *
     * Manage multiple contacts by adding, removing or unsubscribing them from a specific contact list. Once you submit the `POST` request, it will return a `JobID`, which you can use to verify the success of the `POST` request, as well as see what kind of errors came up. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public function post(int $list_ID, \MailjetSDK\DTOs\NewContactslistManageManyContacts $payload): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Managemanycontacts\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Managemanycontacts\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['list_ID' => $list_ID]);
        return $result;
    }

    private const array GET_BY_JOB_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/contactslist/{list_ID}/managemanycontacts/{job_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslist\\ByListID\\Managemanycontacts\\ByJobID\\Get',
    ];

    /**
     * Get Contact List: Manage Many Contacts
     *
     * Use the `JobID` generated after a `POST /contactslist/{list_id}/managemanycontacts` request to check its progress, success, as well as any errors that might have occurred. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public function getByJobID(\MailjetSDK\PathParams\V3\REST\Contactslist\ByListID\Managemanycontacts\ByJobID $identifier): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Managemanycontacts\ByJobID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Managemanycontacts\ByJobID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_JOB_ID), path: $identifier);
        return $result;
    }
}
