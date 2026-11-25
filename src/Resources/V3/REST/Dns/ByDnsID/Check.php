<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Dns\ByDnsID;

final class Check extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/dns/{dns_ID}/check',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Dns\\ByDnsID\\Check\\Post',
    ];

    /**
     * DNS: Check
     *
     * Perform a DNS validation of a sender domain. The Mailjet API will check for a TXT record in the domain's DNS zone file. [More information](/docs/email-api/senders-domains/sender-validation) To obtain a valid `dns_ID`, first call `GET /v3/REST/dns` to list your domains.
     */
    public function post(int $dns_ID): \MailjetSDK\Responses\V3\REST\Dns\ByDnsID\Check\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Dns\ByDnsID\Check\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['dns_ID' => $dns_ID]);
        return $result;
    }

}
