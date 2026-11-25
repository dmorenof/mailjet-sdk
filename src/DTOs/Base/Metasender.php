<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Metasender extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * User-provided readable description of the domain.
     */
    public string $Description;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Description' => is_string($value) ? $this->Description = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
