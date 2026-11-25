<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Contact\ByContactID;

final class Managecontactslists extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/contact/{contact_ID}/managecontactslists',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contact\\ByContactID\\Managecontactslists\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewContactManagecontactslists',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Contact: Manage Contact Lists
     *
     * Manage the presence and subscription status of a contact for multiple contact lists. Select the contact lists, as well as the desired action to be performed on each one - add, remove or unsub. The contact should already be present in the global contact list. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public function post(int $contact_ID, \MailjetSDK\DTOs\NewContactManagecontactslists $payload): \MailjetSDK\Responses\V3\REST\Contact\ByContactID\Managecontactslists\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contact\ByContactID\Managecontactslists\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['contact_ID' => $contact_ID]);
        return $result;
    }
}
