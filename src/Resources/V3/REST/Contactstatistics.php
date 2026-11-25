<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Contactstatistics extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/contactstatistics',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactstatistics\\Get',
    ];

    /**
     * Contact Statistics List
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics, grouped by contact.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Contactstatistics $params = null): \MailjetSDK\Responses\V3\REST\Contactstatistics\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactstatistics\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_CONTACT_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/contactstatistics/{contact_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactstatistics\\ByContactID\\Get',
    ];

    /**
     * Contact Statistics by ID
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics for a specific contact. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public function getByContactID(int $contact_ID): \MailjetSDK\Responses\V3\REST\Contactstatistics\ByContactID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactstatistics\ByContactID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CONTACT_ID), path: ['contact_ID' => $contact_ID]);
        return $result;
    }

}
