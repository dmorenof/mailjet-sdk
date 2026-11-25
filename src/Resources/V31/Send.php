<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V31;

final class Send extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3.1/send',
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
        'responseType' => '\\MailjetSDK\\Responses\\V31\\Send\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewSendAPIv31Send',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send an email message via Send API v3.1
     *
     * Send API v3.1 is built mainly for reliability, providing very detailed information in case of sending errors. This results in a lower sending limit, however - Send API v3.1 allows you to send up to 50 messages in a single API call, as opposed to v3, where the limit is 100 messages per call.
     *
     * Additionally, Send API v3.1 includes a Sandbox mode. When enabled, the API will perform all the required validations and return success or error messages, but the message will not be sent.
     *
     */
    public function post(\MailjetSDK\DTOs\NewSendAPIv31Send $payload): \MailjetSDK\Responses\V31\Send\Post
    {
        /** @var \MailjetSDK\Responses\V31\Send\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
