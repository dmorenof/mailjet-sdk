<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Campaigndraft extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/campaigndraft',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigndraft\\Get',
    ];

    /**
     * Campaign Draft List
     *
     * Retrieve details on the configuration of all campaign drafts. Newsletter and CampaignDraft objects are differentiated by the `EditMode` values. We recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Campaigndraft $params = null): \MailjetSDK\Responses\V3\REST\Campaigndraft\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigndraft\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/campaigndraft',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigndraft\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewCampaigndraft',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Campaign Draft
     *
     * Create a new campaign draft. `Newsletter` and `CampaignDraft` objects are differentiated by the EditMode values - we recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder.
     */
    public function post(\MailjetSDK\DTOs\NewCampaigndraft $payload): \MailjetSDK\Responses\V3\REST\Campaigndraft\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigndraft\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_DRAFT_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/campaigndraft/{draft_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigndraft\\ByDraftID\\Get',
    ];

    /**
     * Campaign Draft by ID
     *
     * Retrieve details on the configuration of a specific campaign draft. `Newsletter` and `CampaignDraft` objects are differentiated by the EditMode values - we recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder. To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public function getByDraftID(int $draft_ID): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_DRAFT_ID), path: ['draft_ID' => $draft_ID]);
        return $result;
    }

    private const array PUT_BY_DRAFT_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/campaigndraft/{draft_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Campaigndraft\\ByDraftID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Campaigndraft',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Campaign Draft
     *
     * Update the configuration settings of a specific campaign draft. `Newsletter` and `CampaignDraft` objects are differentiated by the EditMode values - we recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder. To obtain a valid `draft_ID`, first call `GET /v3/REST/campaigndraft` to list your campaign drafts.
     */
    public function putByDraftID(int $draft_ID, \MailjetSDK\DTOs\Update\Campaigndraft $payload): \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Campaigndraft\ByDraftID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_DRAFT_ID), $payload, path: ['draft_ID' => $draft_ID]);
        return $result;
    }
}
