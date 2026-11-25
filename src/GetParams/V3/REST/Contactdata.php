<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Contactdata extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Campaign' => 'Campaign',
            'ContactEmail' => 'ContactEmail',
            'ContactsList' => 'ContactsList',
            'Fields' => 'Fields',
            'LastActivityAt' => 'LastActivityAt',
        ],
        'header' => [],
    ];

    public ?int $Campaign;
    public ?string $ContactEmail;
    public ?int $ContactsList;
    public ?string $Fields;
    public ?string $LastActivityAt;
}
