<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Metasender extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'DNS' => 'DNS',
        ],
        'header' => [],
    ];

    public ?int $DNS;
}
