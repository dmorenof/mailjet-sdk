<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Contactdata extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/contactdata',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactdata\\Get',
    ];

    /**
     * Contact Data
     *
     * Retrieve a list of contacts with all properties and respective values associated with those contacts.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Contactdata $params = null): \MailjetSDK\Responses\V3\REST\Contactdata\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactdata\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_CONTACT_ID = [
        'method' => 'DELETE',
        'path' => '/v3/REST/contactdata/{contact_ID}',
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
     * Delete Contact Data
     *
     * Delete all contact property values relating to a specific contact.
     */
    public function deleteByContactID(int $contact_ID): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_CONTACT_ID), path: ['contact_ID' => $contact_ID]);
        return;
    }

    private const array GET_BY_CONTACT_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/contactdata/{contact_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactdata\\ByContactID\\Get',
    ];

    /**
     * Contact Data by ID
     *
     * Retrieve all properties and respective values associated with a specific contact. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public function getByContactID(int $contact_ID): \MailjetSDK\Responses\V3\REST\Contactdata\ByContactID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactdata\ByContactID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CONTACT_ID), path: ['contact_ID' => $contact_ID]);
        return $result;
    }

    private const array PUT_BY_CONTACT_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/contactdata/{contact_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactdata\\ByContactID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Contactdata',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Contact Data
     *
     * Update the extra static data for a contact by using your already created `/contactmetadata` objects (contact properties) and assigning / updating values to them for the specific `ContactID`. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public function putByContactID(int $contact_ID, \MailjetSDK\DTOs\Update\Contactdata $payload): \MailjetSDK\Responses\V3\REST\Contactdata\ByContactID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactdata\ByContactID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_CONTACT_ID), $payload, path: ['contact_ID' => $contact_ID]);
        return $result;
    }
}
