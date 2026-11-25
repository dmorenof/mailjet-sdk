<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Contactslist extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/contactslist',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslist\\Get',
    ];

    /**
     * List Contact Lists
     *
     * Retrieve details for all contact lists - name, subscriber count, creation timestamp, deletion status.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Contactslist $params = null): \MailjetSDK\Responses\V3\REST\Contactslist\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslist\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/contactslist',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslist\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewContactslist',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Contact List
     *
     * Create a new contact list.
     */
    public function post(\MailjetSDK\DTOs\NewContactslist $payload): \MailjetSDK\Responses\V3\REST\Contactslist\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslist\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_LIST_ID = [
        'method' => 'DELETE',
        'path' => '/v3/REST/contactslist/{list_ID}',
        'security' => [
            [
                'basicAuth' => [],
            ],
        ],
        'success' => [
            204,
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
    ];

    /**
     * Delete Contact List
     *
     * Delete a contact list. The ContactsList object will continue to exist with Deleted status for 30 days, and can be reinstated by changing the value of IsDeleted to false via `PUT /contactslist/{list_ID}`.
     */
    public function deleteByListID(int $list_ID): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_LIST_ID), path: ['list_ID' => $list_ID]);
        return;
    }

    private const array GET_BY_LIST_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/contactslist/{list_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslist\\ByListID\\Get',
    ];

    /**
     * Contact List by ID
     *
     * Retrieve details for a specific contact list - name, subscriber count, creation timestamp, deletion status. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public function getByListID(int $list_ID): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_LIST_ID), path: ['list_ID' => $list_ID]);
        return $result;
    }

    private const array PUT_BY_LIST_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/contactslist/{list_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslist\\ByListID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Contactslist',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Contact List
     *
     * Update a specific contact list by changing its name and / or deletion status. Using PUT you can delete lists, as well as reinstate previously deleted ones. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public function putByListID(int $list_ID, \MailjetSDK\DTOs\Update\Contactslist $payload): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_LIST_ID), $payload, path: ['list_ID' => $list_ID]);
        return $result;
    }
}
