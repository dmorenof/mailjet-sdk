<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Contact extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/contact',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contact\\Get',
    ];

    /**
     * List Contacts
     *
     * Retrieve a list of all contacts. Includes information about contact status and creation / activity timestamps.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Contact $params = null): \MailjetSDK\Responses\V3\REST\Contact\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contact\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/contact',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contact\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewContact',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Contact
     *
     * Add a new unique contact to your global contact list and select its exclusion status.
     */
    public function post(\MailjetSDK\DTOs\NewContact $payload): \MailjetSDK\Responses\V3\REST\Contact\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contact\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_CONTACT_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/contact/{contact_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contact\\ByContactID\\Get',
    ];

    /**
     * Contact by ID
     *
     * Retrieve a specific contact. Includes information about contact status and creation / activity timestamps. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public function getByContactID(int $contact_ID): \MailjetSDK\Responses\V3\REST\Contact\ByContactID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contact\ByContactID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CONTACT_ID), path: ['contact_ID' => $contact_ID]);
        return $result;
    }

    private const array PUT_BY_CONTACT_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/contact/{contact_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contact\\ByContactID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Contact',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Contact
     *
     * Update the user-given name and exclusion status of a specific contact. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public function putByContactID(int $contact_ID, \MailjetSDK\DTOs\Update\Contact $payload): \MailjetSDK\Responses\V3\REST\Contact\ByContactID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contact\ByContactID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_CONTACT_ID), $payload, path: ['contact_ID' => $contact_ID]);
        return $result;
    }

}
