<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Myprofile extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/myprofile',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Myprofile\\Get',
    ];

    /**
     * My Profile
     *
     * Manage your user profile data such as address, payment information etc.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Myprofile $params = null): \MailjetSDK\Responses\V3\REST\Myprofile\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Myprofile\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/REST/myprofile',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Myprofile\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Myprofile',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update My Profile
     *
     * Update your profile information - personal and organization settings.
     */
    public function put(\MailjetSDK\DTOs\Update\Myprofile $payload): \MailjetSDK\Responses\V3\REST\Myprofile\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Myprofile\Put $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload);
        return $result;
    }
}
