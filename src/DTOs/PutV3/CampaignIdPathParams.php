<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\PutV3;

final class CampaignIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'campaign_ID',
    ];

    /**
     * The `CustomValue` of the campaign you want to update. Can be used as an alternative to `campaign_ID`.
     */
    public string $CustomCampaign;
    /**
     * Unique numeric ID of the campaign you want to update.
     */
    public int $campaign_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CustomCampaign' => is_string($value) ? $this->CustomCampaign = $value : parent::assignMember($name, $value),
            'campaign_ID' => is_int($value) ? $this->campaign_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
