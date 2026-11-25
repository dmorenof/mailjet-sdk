<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Openinformation extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'CampaignID' => 'CampaignID',
            'ContactsList' => 'ContactsList',
            'CustomCampaign' => 'CustomCampaign',
            'EventFromTs' => 'EventFromTs',
            'EventToTs' => 'EventToTs',
            'From' => 'From',
            'FromDomain' => 'FromDomain',
            'FromID' => 'FromID',
            'FromTS' => 'FromTS',
            'FromType' => 'FromType',
            'IsDeleted' => 'IsDeleted',
            'MessageStatus' => 'MessageStatus',
            'Period' => 'Period',
            'ToTS' => 'ToTS',
        ],
        'header' => [],
    ];

    public ?int $CampaignID;
    public ?int $ContactsList;
    public ?string $CustomCampaign;
    public ?string $EventFromTs;
    public ?string $EventToTs;
    public ?string $From;
    public ?string $FromDomain;
    public ?int $FromID;
    public ?string $FromTS;
    public ?int $FromType;
    public ?bool $IsDeleted;
    public ?int $MessageStatus;
    public ?string $Period;
    public ?string $ToTS;
}
