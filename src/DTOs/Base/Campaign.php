<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Campaign extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether this campaign is deleted or not.
     */
    public bool $IsDeleted;
    /**
     * Indicates whether this campaign is marked as starred or not.
     */
    public bool $IsStarred;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'IsDeleted' => is_bool($value) ? $this->IsDeleted = $value : parent::assignMember($name, $value),
            'IsStarred' => is_bool($value) ? $this->IsStarred = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
