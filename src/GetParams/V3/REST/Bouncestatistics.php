<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Bouncestatistics extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'CampaignID' => 'CampaignID',
        'ContactsList' => 'ContactsList',
        'EventFromTs' => 'EventFromTs',
        'EventToTs' => 'EventToTs',
        'FromTS' => 'FromTS',
        'Period' => 'Period',
        'ToTS' => 'ToTS',
    ],
    'header' => [],
];

    public ?int $CampaignID;
    public ?int $ContactsList;
    public ?string $EventFromTs;
    public ?string $EventToTs;
    public ?string $FromTS;
    public ?string $Period;
    public ?string $ToTS;
}
