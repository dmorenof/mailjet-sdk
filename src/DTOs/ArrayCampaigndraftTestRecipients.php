<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class ArrayCampaigndraftTestRecipients extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Email',
];

    /**
     * Email address of the recipient.
     */
    public string $Email;
    /**
     * User-selected name for this recipient. The name will be visible to the recipient.
     */
    public string $Name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
