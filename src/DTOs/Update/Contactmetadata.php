<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Update;

final class Contactmetadata extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates the type of data accepted for this contact property:
     *
     * - `str` - string
     * - `int` - integer
     * - `float` - float / number
     * - `bool` - boolean
     * - `datetime` - datetime (Unix Timestamp or RFC 3339)
     *
     * Default value: `str`
     *
     */
    public string $Datatype;
    /**
     * Name of the contact property. The name must be unique for the respective namespace.
     */
    public string $Name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Datatype' => is_string($value) ? $this->Datatype = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
