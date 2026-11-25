<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Eventcallbackurl extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'Backup' => 'Backup',
        'EventType' => 'EventType',
        'Status' => 'Status',
        'Version' => 'Version',
    ],
    'header' => [],
];

    public ?bool $Backup;
    public ?int $EventType;
    public ?string $Status;
    public ?int $Version;
}
