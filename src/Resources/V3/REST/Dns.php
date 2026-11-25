<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Dns extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/dns',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Dns\\Get',
    ];

    /**
     * DNS List
     *
     * Retrieve the SPF and DKIM settings for all sender domains on this API Key. The information will help you configure your SPF and DKIM settings on the respective domain, before running a DNS check with `/dns/{dns_id}/check` to validate it and complete the SPF and DKIM authentication.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Dns $params = null): \MailjetSDK\Responses\V3\REST\Dns\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Dns\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_DNS_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/dns/{dns_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Dns\\ByDnsID\\Get',
    ];

    /**
     * DNS by ID
     *
     * Retrieve the SPF and DKIM settings for a specific sender domain on this API Key. The information will help you configure your SPF and DKIM settings on the respective domain, before running a DNS check with `/dns/{dns_id}/check` to validate it. To obtain a valid `dns_ID`, first call `GET /v3/REST/dns` to list your domains.
     */
    public function getByDnsID(int $dns_ID): \MailjetSDK\Responses\V3\REST\Dns\ByDnsID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Dns\ByDnsID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_DNS_ID), path: ['dns_ID' => $dns_ID]);
        return $result;
    }

}
