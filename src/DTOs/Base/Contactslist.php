<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Contactslist extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When true, the contact list will be marked as `Deleted`. Deleted lists can later be reinstated by updating this value to `False`.
     */
    public bool $IsDeleted;
    /**
     * User-specified name for this contact list (must be unique).
     */
    public string $Name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'IsDeleted' => is_bool($value) ? $this->IsDeleted = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
