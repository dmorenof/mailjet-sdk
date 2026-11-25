<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class ArrayContactdataData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The name of the contact property.
     */
    public string $Name;
    /**
     * The value of the contact property for this contact. The type of values accepted depends on the respective `contactmetadata`'s type.
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
