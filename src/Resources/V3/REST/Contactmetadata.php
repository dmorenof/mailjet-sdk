<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Contactmetadata extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/contactmetadata',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactmetadata\\Get',
    ];

    /**
     * Contact Metadata List
     *
     * Retrieve a list of contact properties and their general settings - name and data type.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Contactmetadata $params = null): \MailjetSDK\Responses\V3\REST\Contactmetadata\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactmetadata\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/contactmetadata',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactmetadata\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewContactmetadata',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Contact Metadata
     *
     * Create a new contact property. Select its name and data type, then use it to assign property values for contacts of your choice (with `/contactdata`).
     */
    public function post(\MailjetSDK\DTOs\NewContactmetadata $payload): \MailjetSDK\Responses\V3\REST\Contactmetadata\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactmetadata\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_CONTACTMETADATA_ID = [
        'method' => 'DELETE',
        'path' => '/v3/REST/contactmetadata/{contactmetadata_ID}',
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
     * Delete Contact Metadata
     *
     * Delete an existing contact property. Once the property is deleted, the values assigned to it for all contacts are also deleted.
     */
    public function deleteByContactmetadataID(int $contactmetadata_ID): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_CONTACTMETADATA_ID), path: ['contactmetadata_ID' => $contactmetadata_ID]);
        return;
    }

    private const array GET_BY_CONTACTMETADATA_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/contactmetadata/{contactmetadata_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactmetadata\\ByContactmetadataID\\Get',
    ];

    /**
     * Contact Metadata by ID
     *
     * Retrieve information on a specific contact property - its name and data type. To obtain a valid `contactmetadata_ID`, first call `GET /v3/REST/contactmetadata` to list your contact properties.
     */
    public function getByContactmetadataID(int $contactmetadata_ID): \MailjetSDK\Responses\V3\REST\Contactmetadata\ByContactmetadataID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactmetadata\ByContactmetadataID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CONTACTMETADATA_ID), path: ['contactmetadata_ID' => $contactmetadata_ID]);
        return $result;
    }

    private const array PUT_BY_CONTACTMETADATA_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/contactmetadata/{contactmetadata_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactmetadata\\ByContactmetadataID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Contactmetadata',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Contact Metadata
     *
     * Update the settings of an existing contact property - name and data type. Changing the data type will not affect existing property values, but new values must be entered using the new data type. To obtain a valid `contactmetadata_ID`, first call `GET /v3/REST/contactmetadata` to list your contact properties.
     */
    public function putByContactmetadataID(int $contactmetadata_ID, \MailjetSDK\DTOs\Update\Contactmetadata $payload): \MailjetSDK\Responses\V3\REST\Contactmetadata\ByContactmetadataID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactmetadata\ByContactmetadataID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_CONTACTMETADATA_ID), $payload, path: ['contactmetadata_ID' => $contactmetadata_ID]);
        return $result;
    }

}
