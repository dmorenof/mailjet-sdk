<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class CampaigngraphstatisticsIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'campaign_ID',
];

    /**
     * Unique numeric ID for this campaign you want to retrieve the stats evolution for.
     */
    public int $campaign_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaign_ID' => is_int($value) ? $this->campaign_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
