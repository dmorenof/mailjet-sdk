<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Campaigndraft\ByDraftID;

final class Status extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/campaigndraft/{draft_ID}/status',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigndraft\\ByDraftID\\Status\\Get',
    ];

    /**
     * Get Campaign Draft: Status
     *
     * View the sending status of a campaign draft. To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public function get(int $draft_ID): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Status\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Status\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['draft_ID' => $draft_ID]);
        return $result;
    }

}
