<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ContactmetadataIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contactmetadata_ID',
    ];

    protected const array PROPERTY_MAP = [
        'NameSpace|contactmetadata_name' => 'NameSpaceContactmetadata_name',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'NameSpaceContactmetadata_name' => 'NameSpace|contactmetadata_name',
    ];

    /**
     * A combination of the `NameSpace` and user-selected name for the metadata object you want to retrieve, separated with a vertial line. E.g. `static|age`. Can be used as an alternative to `contactmetadata_ID`.
     */
    public string $NameSpaceContactmetadata_name;
    /**
     * Unique numeric ID for the metadata object you want to retrieve.
     */
    public int $contactmetadata_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'NameSpace|contactmetadata_name' => is_string($value) ? $this->NameSpaceContactmetadata_name = $value : parent::assignMember($name, $value),
            'contactmetadata_ID' => is_int($value) ? $this->contactmetadata_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
