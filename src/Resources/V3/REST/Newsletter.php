<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Newsletter extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/newsletter',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Newsletter\\Get',
    ];

    /**
     * Newsletter List
     *
     * Retrieve details on the configuration of all newsletters. `Newsletter` and `CampaignDraft` objects are differentiated by the `EditMode` values. We recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder.
     *
     * @deprecated
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Newsletter $params = null): \MailjetSDK\Responses\V3\REST\Newsletter\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Newsletter\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/newsletter',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Newsletter\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewNewsletter',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Newsletter
     *
     * Create a new newsletter. `CampaignDraft` and `Newsletter` objects are differentiated by the `EditMode` values - we recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder.
     *
     * @deprecated
     */
    public function post(\MailjetSDK\DTOs\NewNewsletter $payload): \MailjetSDK\Responses\V3\REST\Newsletter\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Newsletter\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array GET_BY_NEWSLETTER_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/newsletter/{newsletter_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Newsletter\\ByNewsletterID\\Get',
    ];

    /**
     * Newsletter by ID
     *
     * Retrieve details on the configuration of a specific newsletter. `CampaignDraft` and `Newsletter` objects are differentiated by the `EditMode` values - we recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public function getByNewsletterID(int $newsletter_ID): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_NEWSLETTER_ID), path: ['newsletter_ID' => $newsletter_ID]);
        return $result;
    }

    private const array PUT_BY_NEWSLETTER_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/newsletter/{newsletter_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Newsletter\\ByNewsletterID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Newsletter',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Newsletter
     *
     * Update the configuration settings of a specific newsletter. `Newsletter` and `CampaignDraft` objects are differentiated by the `EditMode` values - we recommend using `CampaignDraft`, as `Newsletter` objects are ones created using the legacy Mailjet template builder. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public function putByNewsletterID(int $newsletter_ID, \MailjetSDK\DTOs\Update\Newsletter $payload): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_NEWSLETTER_ID), $payload, path: ['newsletter_ID' => $newsletter_ID]);
        return $result;
    }
}
