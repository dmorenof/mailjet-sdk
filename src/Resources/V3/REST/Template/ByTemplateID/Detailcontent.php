<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Template\ByTemplateID;

final class Detailcontent extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/template/{template_ID}/detailcontent',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Template\\ByTemplateID\\Detailcontent\\Get',
    ];

    /**
     * Get Template: Detail Content
     *
     * Retrieve the contents of an email template. It will be split between a Text part, HTML part, MJML content and/or additional headers. To obtain a valid `template_ID`, first call `GET /v3/REST/template` to list your templates.
     */
    public function get(int $template_ID): \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Detailcontent\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Detailcontent\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['template_ID' => $template_ID]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/template/{template_ID}/detailcontent',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Template\\ByTemplateID\\Detailcontent\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewTemplateDetailcontent',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Template: Detail Content
     *
     * Create the contents of an email template. You can select a Text part, HTML part, MJML content, as well as additional headers. To obtain a valid `template_ID`, first call `GET /v3/REST/template` to list your templates.
     */
    public function post(int $template_ID, \MailjetSDK\DTOs\NewTemplateDetailcontent $payload): \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Detailcontent\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Detailcontent\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['template_ID' => $template_ID]);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/REST/template/{template_ID}/detailcontent',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Template\\ByTemplateID\\Detailcontent\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewTemplateDetailcontent',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Template: Detail Content
     *
     * Update the contents of an email template - the Text part, HTML part, MJML content and/or the additional headers. To obtain a valid `template_ID`, first call `GET /v3/REST/template` to list your templates.
     */
    public function put(int $template_ID, \MailjetSDK\DTOs\NewTemplateDetailcontent $payload): \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Detailcontent\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Detailcontent\Put $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload, path: ['template_ID' => $template_ID]);
        return $result;
    }

}
