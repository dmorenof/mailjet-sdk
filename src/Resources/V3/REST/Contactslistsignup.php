<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Contactslistsignup extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/contactslistsignup',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslistsignup\\Get',
    ];

    /**
     * Contact List Signup List
     *
     * Retrieve details about all contact list signup requests via a subscription widget. Provides details on signup and subscription confirmation IPs, timestamp, subscription source etc.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Contactslistsignup $params = null): \MailjetSDK\Responses\V3\REST\Contactslistsignup\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslistsignup\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_SIGNUPREQUEST_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/contactslistsignup/{signuprequest_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslistsignup\\BySignuprequestID\\Get',
    ];

    /**
     * Contact List Signup by ID
     *
     * Retrieve details about a specific subscription request done via a subscription widget. Provides details on signup and subscription confirmation IP, timestamp, subscription source etc. To obtain a valid `signuprequest_ID`, first call `GET /v3/REST/contactslistsignup` to list your subscription requests.
     */
    public function getBySignuprequestID(int $signuprequest_ID): \MailjetSDK\Responses\V3\REST\Contactslistsignup\BySignuprequestID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslistsignup\BySignuprequestID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SIGNUPREQUEST_ID), path: ['signuprequest_ID' => $signuprequest_ID]);
        return $result;
    }

}
