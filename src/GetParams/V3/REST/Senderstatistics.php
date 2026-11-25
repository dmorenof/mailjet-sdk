<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Senderstatistics extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Domain' => 'Domain',
            'Email' => 'Email',
            'Sender' => 'Sender',
        ],
        'header' => [],
    ];

    public ?string $Domain;
    public ?string $Email;
    public ?int $Sender;
}
