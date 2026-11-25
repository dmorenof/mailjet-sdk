<?php

declare(strict_types=1);

namespace MailjetSDK\Resources\V3\REST\Newsletter\ByNewsletterID;

final class Status extends \MailjetSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/REST/newsletter/{newsletter_ID}/status',
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
        'responseType' => '\\MailjetSDK\\Responses\\V3\\REST\\Newsletter\\ByNewsletterID\\Status\\Get',
    ];

    /**
     * Get Newsletter: Status
     *
     * View the sending status of a newsletter. To obtain a valid `newsletter_ID`, first call `GET /v3/REST/newsletter` to list your newsletters.
     *
     * @deprecated
     */
    public function get(int $newsletter_ID): \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Status\Get
    {
        /** @var \MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Status\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['newsletter_ID' => $newsletter_ID]);
        return $result;
    }
}
