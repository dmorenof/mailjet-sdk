<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class User extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/user',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\User\\Get',
    ];

    /**
     * User List
     *
     * Get general information on your user settings and activity.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\User $params = null): \MailjetSDK\Responses\V3\REST\User\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\User\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/REST/user',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\User\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\User',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update User
     *
     * Update the settings of your User ID - username, registered email, language and time zone settings.
     */
    public function put(\MailjetSDK\DTOs\Update\User $payload): \MailjetSDK\Responses\V3\REST\User\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\User\Put $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload);
        return $result;
    }

}
