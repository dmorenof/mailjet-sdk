<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Apikey extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Access Control List. Indicates permissions attached to a resource.
     */
    public string $ACL;
    /**
     * Indicates whether this API Key is active or not.
     */
    public bool $IsActive;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ACL' => is_string($value) ? $this->ACL = $value : parent::assignMember($name, $value),
            'IsActive' => is_bool($value) ? $this->IsActive = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
