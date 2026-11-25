<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Dns extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'IsCheckInProgress' => 'IsCheckInProgress',
        'IsSenderIdentified' => 'IsSenderIdentified',
        'IsYahooFBL' => 'IsYahooFBL',
        'MaxLastCheckAt' => 'MaxLastCheckAt',
        'MinLastCheckAt' => 'MinLastCheckAt',
        'SPFStatus' => 'SPFStatus',
    ],
    'header' => [],
];

    public ?bool $IsCheckInProgress;
    public ?bool $IsSenderIdentified;
    public ?bool $IsYahooFBL;
    public ?string $MaxLastCheckAt;
    public ?string $MinLastCheckAt;
    public ?string $SPFStatus;
}
