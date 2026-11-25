<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Messagestatistics extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'CampaignID' => 'CampaignID',
        'ContactEmail' => 'ContactEmail',
        'ContactID' => 'ContactID',
        'ContactListID' => 'ContactListID',
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
        'MessageStatus' => 'MessageStatus',
        'Period' => 'Period',
        'ProcessTotalClicksCount' => 'ProcessTotalClicksCount',
        'ProcessTotalOpensCount' => 'ProcessTotalOpensCount',
        'ToTS' => 'ToTS',
    ],
    'header' => [],
];

    public ?int $CampaignID;
    public ?string $ContactEmail;
    public ?int $ContactID;
    public ?int $ContactListID;
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
    public ?int $MessageStatus;
    public ?string $Period;
    public ?bool $ProcessTotalClicksCount;
    public ?bool $ProcessTotalOpensCount;
    public ?string $ToTS;
}
