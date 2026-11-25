<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID;

final class Detailcontent extends \MailjetSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/REST/newsletter/{newsletter_ID}/detailcontent',
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
     * Delete Newsletter: Detail Content
     *
     * Delete the contents of a newsletter email.
     *
     * @deprecated
     */
    public function delete(int $newsletter_ID): void
    {
        $this->executeArguments(self::operation(self::DELETE), path: ['newsletter_ID' => $newsletter_ID]);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/newsletter/{newsletter_ID}/detailcontent',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Newsletter\\ByNewsletterID\\Detailcontent\\Get',
    ];

    /**
     * Get Newsletter: Detail Content
     *
     * Retrieve the content of your newsletter email. It will be splin between a Text part and an HTML part. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public function get(int $newsletter_ID): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Detailcontent\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Detailcontent\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['newsletter_ID' => $newsletter_ID]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/newsletter/{newsletter_ID}/detailcontent',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Newsletter\\ByNewsletterID\\Detailcontent\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewNewsletterDetailcontent',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Newsletter: Detail Content
     *
     * Create, update or delete the content of your newsletter email. You can select a Text part and/or HTML part.
     *
     * Each POST request overwrites any content previously added - e.g. if you have submitted HTML content on the initial `POST`, and on the next you only submit Text content, the previously saved value of `Html-part` will be deleted.
     *  To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public function post(int $newsletter_ID, \MailjetSDK\DTOs\NewNewsletterDetailcontent $payload): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Detailcontent\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Detailcontent\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['newsletter_ID' => $newsletter_ID]);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/REST/newsletter/{newsletter_ID}/detailcontent',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Newsletter\\ByNewsletterID\\Detailcontent\\Put',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\Update\\NewsletterDetailcontent',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Newsletter: Detail Content
     *
     * Update the contents of a newsletter email. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public function put(int $newsletter_ID, \MailjetSDK\DTOs\Update\NewsletterDetailcontent $payload): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Detailcontent\Put
    {
        /** @var \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Detailcontent\Put $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload, path: ['newsletter_ID' => $newsletter_ID]);
        return $result;
    }

}
