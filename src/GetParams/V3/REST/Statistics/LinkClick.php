<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST\Statistics;

final class LinkClick extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'CampaignID',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'CampaignID' => 'CampaignID',
        ],
        'header' => [],
    ];

    public int $CampaignID;
}
