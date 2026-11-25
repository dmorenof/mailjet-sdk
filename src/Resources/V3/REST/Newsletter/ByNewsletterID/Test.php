<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID;

final class Test extends \MailjetSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/REST/newsletter/{newsletter_ID}/test',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Newsletter\\ByNewsletterID\\Test\\Post',
        'requestBody' => [
            'type' => '\\MailjetSDK\\DTOs\\NewNewsletterTest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Newsletter: Test
     *
     * Test a created newsletter by sending it to a selection of recipients. The status of the campaign draft will not be affected by the test. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public function post(int $newsletter_ID, ?\MailjetSDK\DTOs\NewNewsletterTest $payload = null): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Test\Post
    {
        /** @var \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Test\Post $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['newsletter_ID' => $newsletter_ID]) : $this->executeArguments(self::operation(self::POST), path: ['newsletter_ID' => $newsletter_ID]);
        return $result;
    }
}
