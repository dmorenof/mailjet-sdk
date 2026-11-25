<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Sender\BySenderID;

final class Validate extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/sender/{sender_ID}/validate',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Sender\\BySenderID\\Validate\\Post',
    ];

    /**
     * Sender: Validate
     *
     * Validate a registered sender email address or domain. A sender domain (*&#64;domain.com) is validated by checking the caller's rights, the existence of a metasender for that domain or by searching for the ownership token on the domain root or in the DNS. To obtain a valid `sender_ID`, first call `GET /v3/REST/sender` to list your senders.
     */
    public function post(int $sender_ID): \MailjetSDK\Responses\V3\REST\Sender\BySenderID\Validate\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Sender\BySenderID\Validate\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['sender_ID' => $sender_ID]);
        return $result;
    }

}
