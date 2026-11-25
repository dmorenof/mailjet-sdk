<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Contactfilter extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/contactfilter',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactfilter\\Get',
    ];

    /**
     * Contact Filter List
     *
     * Retrieve a list of all segments and details on their configuration. Segments can be applied on contact lists when you send your campaigns. Segmentation is done based on additional data saved for contacts via `/contactmetadata` and/or based on contact activity (or lack thereof).
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Contactfilter $params = null): \MailjetSDK\Responses\V3\REST\Contactfilter\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactfilter\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/contactfilter',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactfilter\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewContactfilter',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Contact Filter
     *
     * Create a new segmentation formula to be applied on contact lists when you send your campaigns. Segmentation can be done based on additional data saved for contacts via `/contactmetadata` and/or based on contact activity (or lack thereof). The properties used in `Expression` must already exist on your account - create them first with `POST /v3/REST/contactmetadata`, otherwise the request fails with `Unknown identifier`.
     */
    public function post(\MailjetSDK\DTOs\NewContactfilter $payload): \MailjetSDK\Responses\V3\REST\Contactfilter\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactfilter\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_CONTACTFILTER_ID = [
        'method' => 'DELETE',
        'path' => '/v3/REST/contactfilter/{contactfilter_ID}',
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
     * Delete Contact Filter
     *
     * Delete an existing segment. Segments can be applied on contact lists when you send your campaigns. Segmentation is done based on additional data saved for contacts via `/contactmetadata`  and/or based on contact activity (or lack thereof).
     *
     * The deletion is a soft one and a deleted segment can later be reinstated by changing its `Status` via a `PUT` request.
     *
     */
    public function deleteByContactfilterID(int $contactfilter_ID): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_CONTACTFILTER_ID), path: ['contactfilter_ID' => $contactfilter_ID]);
        return;
    }

    private const array GET_BY_CONTACTFILTER_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/contactfilter/{contactfilter_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactfilter\\ByContactfilterID\\Get',
    ];

    /**
     * Contact Filter by ID
     *
     * Retrieve configuration details for a specific segment. Segments can be applied on contact lists when you send your campaigns. Segmentation is done based on additional data saved for contacts via `/contactmetadata`  and/or based on contact activity (or lack thereof). To obtain a valid `contactfilter_ID`, first call `GET /v3/REST/contactfilter` to list your segments.
     */
    public function getByContactfilterID(int $contactfilter_ID): \MailjetSDK\Responses\V3\REST\Contactfilter\ByContactfilterID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactfilter\ByContactfilterID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CONTACTFILTER_ID), path: ['contactfilter_ID' => $contactfilter_ID]);
        return $result;
    }

    private const array PUT_BY_CONTACTFILTER_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/contactfilter/{contactfilter_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactfilter\\ByContactfilterID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Contactfilter',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Contact Filter
     *
     * Update an existing segment. Segments can be applied on contact lists when you send your campaigns. Segmentation is done based on additional data saved for contacts via `/contactmetadata`  and/or based on contact activity (or lack thereof).
     *
     * Only segments with `deleted` status can be updated via the API. Deleted segments can be updated to `unused`.
     *  To obtain a valid `contactfilter_ID`, first call `GET /v3/REST/contactfilter` to list your segments.
     */
    public function putByContactfilterID(int $contactfilter_ID, \MailjetSDK\DTOs\Update\Contactfilter $payload): \MailjetSDK\Responses\V3\REST\Contactfilter\ByContactfilterID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactfilter\ByContactfilterID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_CONTACTFILTER_ID), $payload, path: ['contactfilter_ID' => $contactfilter_ID]);
        return $result;
    }

}
