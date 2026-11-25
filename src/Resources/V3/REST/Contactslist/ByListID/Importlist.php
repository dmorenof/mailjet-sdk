<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Contactslist\ByListID;

final class Importlist extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/contactslist/{list_ID}/importlist',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslist\\ByListID\\Importlist\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewContactslistImportList',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Contact List: Import List
     *
     * Add, unsubscribe or remove the contacts present in a list to / from another list. The list ID specified in the body of the payload is the source, while ID in the path specifies the destination list. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public function post(int $list_ID, \MailjetSDK\DTOs\NewContactslistImportList $payload): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Importlist\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Importlist\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['list_ID' => $list_ID]);
        return $result;
    }

    private const array GET_BY_JOB_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/contactslist/{list_ID}/importlist/{job_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslist\\ByListID\\Importlist\\ByJobID\\Get',
    ];

    /**
     * Get Contact List: Import List
     *
     * Use the JobID generated after a `POST /contactslist/{list_id}/importlist` request to check its progress, success, as well as any errors that might have occurred. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public function getByJobID(\MailjetSDK\PathParams\V3\REST\Contactslist\ByListID\Importlist\ByJobID $identifier): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Importlist\ByJobID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Importlist\ByJobID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_JOB_ID), path: $identifier);
        return $result;
    }
}
