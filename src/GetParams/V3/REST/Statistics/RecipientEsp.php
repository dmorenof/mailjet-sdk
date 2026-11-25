<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST\Statistics;

final class RecipientEsp extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'CampaignID',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'CampaignID' => 'CampaignID',
        'ESP_Name' => 'ESP_Name',
    ],
    'header' => [],
];

    public int $CampaignID;
    public ?int $ESP_Name;
}
