<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Useragentstatistics extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'CampaignID' => 'CampaignID',
        'ContactsList' => 'ContactsList',
        'CustomCampaign' => 'CustomCampaign',
        'Event' => 'Event',
        'ExcludePlatform' => 'ExcludePlatform',
        'From' => 'From',
        'FromDomain' => 'FromDomain',
        'FromID' => 'FromID',
        'FromTS' => 'FromTS',
        'FromType' => 'FromType',
        'IsDeleted' => 'IsDeleted',
        'IsNewsletterTool' => 'IsNewsletterTool',
        'IsStarred' => 'IsStarred',
        'Period' => 'Period',
        'Platform' => 'Platform',
        'ToTS' => 'ToTS',
    ],
    'header' => [],
];

    public ?int $CampaignID;
    public ?int $ContactsList;
    public ?string $CustomCampaign;
    public ?string $Event;
    public ?string $ExcludePlatform;
    public ?string $From;
    public ?string $FromDomain;
    public ?int $FromID;
    public ?string $FromTS;
    public ?int $FromType;
    public ?bool $IsDeleted;
    public ?bool $IsNewsletterTool;
    public ?bool $IsStarred;
    public ?string $Period;
    public ?string $Platform;
    public ?string $ToTS;
}
