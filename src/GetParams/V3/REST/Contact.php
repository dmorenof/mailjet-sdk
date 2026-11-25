<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Contact extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Campaign' => 'Campaign',
            'ContactsList' => 'ContactsList',
            'IsExcludedFromCampaigns' => 'IsExcludedFromCampaigns',
            'LastActivityAt' => 'LastActivityAt',
        ],
        'header' => [],
    ];

    public ?int $Campaign;
    public ?int $ContactsList;
    public ?bool $IsExcludedFromCampaigns;
    public ?string $LastActivityAt;
}
