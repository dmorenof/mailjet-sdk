<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Contactslist\ByListID;

final class Managecontact extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/contactslist/{list_ID}/managecontact',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contactslist\\ByListID\\Managecontact\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewContactslistManageContact',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Contact List: Manage Contact
     *
     * Manage the presence and subscription status of a contact to a specific contact list. The API will internally create the new contact if it does not exist, as well as add or update the name and properties. To obtain a valid `list_ID`, first call `GET /v3/REST/contactslist` to list your contact lists.
     */
    public function post(int $list_ID, \MailjetSDK\DTOs\NewContactslistManageContact $payload): \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Managecontact\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contactslist\ByListID\Managecontact\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['list_ID' => $list_ID]);
        return $result;
    }

}
