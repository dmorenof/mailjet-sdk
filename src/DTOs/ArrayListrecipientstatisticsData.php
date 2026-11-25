<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class ArrayListrecipientstatisticsData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Name of this contact property.
     */
    public string $Name;
    /**
     * Value of this contact property for this contact.
     */
    public string $Value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'Value' => is_string($value) ? $this->Value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
