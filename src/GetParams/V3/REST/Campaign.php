<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Campaign extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'CampaignID' => 'CampaignID',
        'ContactsListID' => 'ContactsListID',
        'CustomCampaign' => 'CustomCampaign',
        'From' => 'From',
        'FromDomain' => 'FromDomain',
        'FromID' => 'FromID',
        'FromTS' => 'FromTS',
        'FromType' => 'FromType',
        'IsDeleted' => 'IsDeleted',
        'IsNewsletterTool' => 'IsNewsletterTool',
        'IsStarred' => 'IsStarred',
        'Period' => 'Period',
        'ToTS' => 'ToTS',
        'WorkflowID' => 'WorkflowID',
    ],
    'header' => [],
];

    public ?int $CampaignID;
    public ?int $ContactsListID;
    public ?string $CustomCampaign;
    public ?string $From;
    public ?string $FromDomain;
    public ?int $FromID;
    public ?string $FromTS;
    public ?int $FromType;
    public ?bool $IsDeleted;
    public ?bool $IsNewsletterTool;
    public ?bool $IsStarred;
    public ?string $Period;
    public ?string $ToTS;
    public ?int $WorkflowID;
}
