<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID;

final class Detailcontent extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/campaigndraft/{draft_ID}/detailcontent',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigndraft\\ByDraftID\\Detailcontent\\Get',
    ];

    /**
     * Get Campaign Draft: Detail Content
     *
     * Retrieve the content of your campaign draft email. It will be split between a Text part, HTML part, MJML content and/or additional headers. To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public function get(int $draft_ID): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Detailcontent\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Detailcontent\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['draft_ID' => $draft_ID]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/campaigndraft/{draft_ID}/detailcontent',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigndraft\\ByDraftID\\Detailcontent\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewCampaigndraftDetailcontent',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Campaign Draft: Detail Content
     *
     * Create, update or delete the content of your campaign draft email. You can select a Text part, HTML part, MJML content, as well as additional headers.
     *
     * Each `POST` request overwrites any content previously added - e.g. if you have submitted HTML content on the initial `POST`, and on the next you only submit Text content, the previously saved value of `Html-part` will be deleted.
     *  To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public function post(int $draft_ID, \MailjetSDK\DTOs\NewCampaigndraftDetailcontent $payload): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Detailcontent\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Detailcontent\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['draft_ID' => $draft_ID]);
        return $result;
    }
}
