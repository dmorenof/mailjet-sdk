<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class CampaigndraftSchedule extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The timestamp, when the campaign draft will be sent out. When the campaign is scheduled for immediate sending, an empty value will be returned.
     */
    public string $Date;
    /**
     * The status of the campaign draft. Upon successful scheduling the status will be set to `Programmed`.
     */
    public string $Status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Date' => is_string($value) ? $this->Date = $value : parent::assignMember($name, $value),
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
