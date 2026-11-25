<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Action;

final class StatusCampaigndraftSend extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Sending status of the campaign draft. Once the `POST` request is successfully processed, the draft will be set as `Programmed` and sent immediately afterwards.
     */
    public string $Status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
