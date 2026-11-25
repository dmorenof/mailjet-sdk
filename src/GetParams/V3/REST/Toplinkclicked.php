<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Toplinkclicked extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'ActualClicks' => 'ActualClicks',
            'CampaignID' => 'CampaignID',
            'Contact' => 'Contact',
            'ContactsList' => 'ContactsList',
            'CustomCampaign' => 'CustomCampaign',
            'From' => 'From',
            'FromDomain' => 'FromDomain',
            'FromID' => 'FromID',
            'FromTS' => 'FromTS',
            'FromType' => 'FromType',
            'IsDeleted' => 'IsDeleted',
            'IsNewsletterTool' => 'IsNewsletterTool',
            'IsStarred' => 'IsStarred',
            'Message' => 'Message',
            'Period' => 'Period',
            'ToTS' => 'ToTS',
        ],
        'header' => [],
    ];

    public ?bool $ActualClicks;
    public ?int $CampaignID;
    public ?int $Contact;
    public ?int $ContactsList;
    public ?string $CustomCampaign;
    public ?string $From;
    public ?string $FromDomain;
    public ?int $FromID;
    public ?string $FromTS;
    public ?int $FromType;
    public ?bool $IsDeleted;
    public ?bool $IsNewsletterTool;
    public ?bool $IsStarred;
    public ?int $Message;
    public ?string $Period;
    public ?string $ToTS;
}
