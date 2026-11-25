<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class CampaignoverviewIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ID',
    ];

    /**
     * A combination of the `IDType` and the unique numeric ID of the object you want to retrieve, separated with a vertical line. E.g. `Campaign|1234`.
     */
    public string $ID;
    /**
     * Indicates the type of object you want to retrieve:
     *
     * - Campaign - Sent campaign
     * - AX - AB Testing object
     * - NL - Draft
     *
     */
    public string $IDType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ID' => is_string($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'IDType' => is_string($value) ? $this->IDType = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
