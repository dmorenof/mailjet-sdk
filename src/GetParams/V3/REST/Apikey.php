<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Apikey extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'APIKey' => 'APIKey',
        'IsActive' => 'IsActive',
        'IsMaster' => 'IsMaster',
        'Name' => 'Name',
    ],
    'header' => [],
];

    public ?string $APIKey;
    public ?bool $IsActive;
    public ?bool $IsMaster;
    public ?string $Name;
}
