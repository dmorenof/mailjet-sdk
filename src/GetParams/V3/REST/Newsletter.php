<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Newsletter extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'AXTesting' => 'AXTesting',
        'Campaign' => 'Campaign',
        'ContactsList' => 'ContactsList',
        'DeliveredAt' => 'DeliveredAt',
        'EditMode' => 'EditMode',
        'IsArchived' => 'IsArchived',
        'IsCampaign' => 'IsCampaign',
        'IsDeleted' => 'IsDeleted',
        'IsHandled' => 'IsHandled',
        'IsStarred' => 'IsStarred',
        'Modified' => 'Modified',
        'NewsLetterTemplate' => 'NewsLetterTemplate',
        'Segmentation' => 'Segmentation',
        'Status' => 'Status',
        'Subject' => 'Subject',
    ],
    'header' => [],
];

    public ?int $AXTesting;
    public ?int $Campaign;
    public ?int $ContactsList;
    public ?string $DeliveredAt;
    public ?string $EditMode;
    public ?bool $IsArchived;
    public ?bool $IsCampaign;
    public ?bool $IsDeleted;
    public ?bool $IsHandled;
    public ?bool $IsStarred;
    public ?bool $Modified;
    public ?int $NewsLetterTemplate;
    public ?int $Segmentation;
    public ?string $Status;
    public ?string $Subject;
}
