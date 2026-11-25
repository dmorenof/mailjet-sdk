<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID;

final class Schedule extends \MailjetSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/REST/campaigndraft/{draft_ID}/schedule',
        'security' => [
            [
                'basicAuth' => [],
            ],
        ],
        'success' => [
            204,
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
    ];

    /**
     * Delete Campaign Draft: Schedule
     *
     * Cancel the scheduled sending of a campaign draft.
     */
    public function delete(int $draft_ID): void
    {
        $this->executeArguments(self::operation(self::DELETE), path: ['draft_ID' => $draft_ID]);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/campaigndraft/{draft_ID}/schedule',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigndraft\\ByDraftID\\Schedule\\Get',
    ];

    /**
     * Get Campaign Draft: Schedule
     *
     * Retrieve the sending schedule of a campaign draft. To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public function get(int $draft_ID): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Schedule\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Schedule\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['draft_ID' => $draft_ID]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/campaigndraft/{draft_ID}/schedule',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigndraft\\ByDraftID\\Schedule\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewCampaigndraftSchedule',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Campaign Draft: Schedule
     *
     * Schedule the sending of a campaign draft.
     */
    public function post(int $draft_ID, \MailjetSDK\DTOs\NewCampaigndraftSchedule $payload): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Schedule\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Schedule\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['draft_ID' => $draft_ID]);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/REST/campaigndraft/{draft_ID}/schedule',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigndraft\\ByDraftID\\Schedule\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\CampaigndraftSchedule',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Campaign Draft: Schedule
     *
     * Update the sending schedule of a campaign draft.
     */
    public function put(int $draft_ID, \MailjetSDK\DTOs\Update\CampaigndraftSchedule $payload): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Schedule\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Schedule\Put $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload, path: ['draft_ID' => $draft_ID]);
        return $result;
    }

}
