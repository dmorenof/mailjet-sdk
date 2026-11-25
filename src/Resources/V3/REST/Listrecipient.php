<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Listrecipient extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/listrecipient',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Listrecipient\\Get',
    ];

    /**
     * List Recipient List
     *
     * Retrieve details on all list recipients, including the contact and list associated with them, as well as subscription status.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Listrecipient $params = null): \MailjetSDK\Responses\V3\REST\Listrecipient\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Listrecipient\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/listrecipient',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Listrecipient\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewListrecipient',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create List Recipient
     *
     * Create a new list recipient. A list recipient object manages the relationship between a `contact` and a `contactslist` - every instance of a contact being added to a list creates a new list recipient. Both the contact and the list need to be created beforehand. Use `GET /v3/REST/contact` and `GET /v3/REST/contactslist` to obtain valid `ContactID` and `ListID` values - the IDs in the example below are placeholders and will not exist in your account.
     */
    public function post(\MailjetSDK\DTOs\NewListrecipient $payload): \MailjetSDK\Responses\V3\REST\Listrecipient\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Listrecipient\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_LISTRECIPIENT_ID = [
        'method' => 'DELETE',
        'path' => '/v3/REST/listrecipient/{listrecipient_ID}',
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
     * Delete List Recipient
     *
     * Delete a list recipient. This effectively removes a contact from a contact list.
     */
    public function deleteByListrecipientID(int $listrecipient_ID): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_LISTRECIPIENT_ID), path: ['listrecipient_ID' => $listrecipient_ID]);
        return;
    }

    private const array GET_BY_LISTRECIPIENT_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/listrecipient/{listrecipient_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Listrecipient\\ByListrecipientID\\Get',
    ];

    /**
     * List Recipient by ID
     *
     * Retrieve details for a specific list recipient, including the contact and list associated with it, as well as the subscription status. To obtain a valid `listrecipient_ID`, first call `GET /v3/REST/listrecipient` to list your list recipients.
     */
    public function getByListrecipientID(int $listrecipient_ID): \MailjetSDK\Responses\V3\REST\Listrecipient\ByListrecipientID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Listrecipient\ByListrecipientID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_LISTRECIPIENT_ID), path: ['listrecipient_ID' => $listrecipient_ID]);
        return $result;
    }

    private const array PUT_BY_LISTRECIPIENT_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/listrecipient/{listrecipient_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Listrecipient\\ByListrecipientID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Listrecipient',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update List Recipient
     *
     * Update the subscription status of a list recipient. To obtain a valid `listrecipient_ID`, first call `GET /v3/REST/listrecipient` to list your list recipients.
     */
    public function putByListrecipientID(int $listrecipient_ID, \MailjetSDK\DTOs\Update\Listrecipient $payload): \MailjetSDK\Responses\V3\REST\Listrecipient\ByListrecipientID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Listrecipient\ByListrecipientID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_LISTRECIPIENT_ID), $payload, path: ['listrecipient_ID' => $listrecipient_ID]);
        return $result;
    }

}
