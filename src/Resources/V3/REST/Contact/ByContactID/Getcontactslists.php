<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Contact\ByContactID;

final class Getcontactslists extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/contact/{contact_ID}/getcontactslists',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Contact\\ByContactID\\Getcontactslists\\Get',
    ];

    /**
     * Get Contact: Get Contact Lists
     *
     * Retrieve all contact lists for a specific contact. You will receive information on the status of the contact for each list. Information about lists deleted within the last 60 days will be returned as well, since those are soft-deleted and can be reinstated. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public function get(int $contact_ID): \MailjetSDK\Responses\V3\REST\Contact\ByContactID\Getcontactslists\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Contact\ByContactID\Getcontactslists\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['contact_ID' => $contact_ID]);
        return $result;
    }
}
