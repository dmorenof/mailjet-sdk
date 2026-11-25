<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST;

final class Template extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/template',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Template\\Get',
    ];

    /**
     * Template List
     *
     * Retrieve a list of all templates and their configuration settings.
     */
    public function get(?\MailjetSDK\GetParams\V3\REST\Template $params = null): \MailjetSDK\Responses\V3\REST\Template\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Template\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/template',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Template\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewTemplate',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Template
     *
     * Create a new email template object and select its basic configuration settings.
     */
    public function post(\MailjetSDK\DTOs\NewTemplate $payload): \MailjetSDK\Responses\V3\REST\Template\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Template\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_TEMPLATE_ID = [
        'method' => 'DELETE',
        'path' => '/v3/REST/template/{template_ID}',
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
     * Delete Template
     *
     * Delete an email template.
     */
    public function deleteByTemplateID(int $template_ID): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_TEMPLATE_ID), path: ['template_ID' => $template_ID]);
        return;
    }

    private const array GET_BY_TEMPLATE_ID = [
        'method' => 'GET',
        'path' => '/v3/REST/template/{template_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Template\\ByTemplateID\\Get',
    ];

    /**
     * Template by ID
     *
     * Retrieve the configuration settings for a specific template. To obtain a valid `template_ID`, first call `GET /v3/REST/template` to list your templates.
     */
    public function getByTemplateID(int $template_ID): \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_TEMPLATE_ID), path: ['template_ID' => $template_ID]);
        return $result;
    }

    private const array PUT_BY_TEMPLATE_ID = [
        'method' => 'PUT',
        'path' => '/v3/REST/template/{template_ID}',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Template\\ByTemplateID\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\Template',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Template
     *
     * Update the configuration settings of an email template. To obtain a valid `template_ID`, first call `GET /v3/REST/template` to list your templates.
     */
    public function putByTemplateID(int $template_ID, \MailjetSDK\DTOs\Update\Template $payload): \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Template\ByTemplateID\Put $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_TEMPLATE_ID), $payload, path: ['template_ID' => $template_ID]);
        return $result;
    }

}
