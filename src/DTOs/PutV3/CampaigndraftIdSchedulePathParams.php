<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\PutV3;

final class CampaigndraftIdSchedulePathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'draft_ID',
];

    /**
     * Unique numeric ID of the campaign draft you want to update the sending schedule of.
     */
    public int $draft_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'draft_ID' => is_int($value) ? $this->draft_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
