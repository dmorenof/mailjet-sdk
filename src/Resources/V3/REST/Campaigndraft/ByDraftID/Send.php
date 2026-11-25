<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID;

final class Send extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/campaigndraft/{draft_ID}/send',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigndraft\\ByDraftID\\Send\\Post',
    ];

    /**
     * Campaign Draft: Send
     *
     * Send a campaign draft immediately.
     */
    public function post(int $draft_ID): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Send\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Send\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['draft_ID' => $draft_ID]);
        return $result;
    }

}
