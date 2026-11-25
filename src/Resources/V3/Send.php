<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3;

final class Send extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/send',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\Send\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewMessageSendAPIv3Send',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send an email message via Send API v3
     *
     * Send a message via Send API v3. Send API v3 is built mainly for speed, allowing you to send up to 100 messages in a single API call, as opposed to v3.1, where the limit is 50 messages per call. However, it lacks some of the more complex functionalities of Send API v3.1 like detailed feedback information in case of sending errors.
     */
    public function post(\MailjetSDK\DTOs\NewMessageSendAPIv3Send $payload): \MailjetSDK\Responses\V3\Send\Post
    {
        /** @var \MailjetSDK\Responses\V3\Send\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
