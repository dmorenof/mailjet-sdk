<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Contact extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether the contact is added to the exclusion list for campaigns or not. An excluded contact will not be receiving any marketing emails.
     */
    public bool $IsExcludedFromCampaigns;
    /**
     * User-selected name for this contact.
     */
    public string $Name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'IsExcludedFromCampaigns' => is_bool($value) ? $this->IsExcludedFromCampaigns = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
