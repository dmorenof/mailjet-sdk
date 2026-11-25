<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewContactmetadata extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Name',
];

    protected const array PROPERTY_MAP = [
    'NameSpace' => 'NameSpace_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'NameSpace_' => 'NameSpace',
];

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
    /**
     * Indicates the namespace of this contact property:
     *
     * - `static` - Can keep only 1 value. Each change to the value of the property for a contact overwrites the previously selected value. The values are saved in a `contactdata` object.
     * - `historic` - Each change to the value of the property creates a record in a new `contacthistorydata` object, saving the property value and a timestamp of when it was submitted.
     *
     * Default value: `static`
     *
     */
    public string $NameSpace_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Datatype' => is_string($value) ? $this->Datatype = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'NameSpace' => is_string($value) ? $this->NameSpace_ = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
