<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Statcounters extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'CounterResolution',
    'CounterSource',
    'CounterTiming',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'CounterResolution' => 'CounterResolution',
        'CounterSource' => 'CounterSource',
        'CounterTiming' => 'CounterTiming',
        'FromTS' => 'FromTS',
        'SourceID' => 'SourceID',
        'ToTS' => 'ToTS',
    ],
    'header' => [],
];

    public string $CounterResolution;
    public string $CounterSource;
    public string $CounterTiming;
    public ?string $FromTS;
    public ?int $SourceID;
    public ?string $ToTS;
}
