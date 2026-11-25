<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\PutV3;

final class TemplateIdDetailcontentPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'template_ID',
];

    protected const array PROPERTY_MAP = [
    'Owner_Type|Template_Name' => 'Owner_TypeTemplate_Name',
];
    protected const array WIRE_PROPERTY_MAP = [
    'Owner_TypeTemplate_Name' => 'Owner_Type|Template_Name',
];

    /**
     * A combination of the `OwnerType` and user-selected name for the template you want to update the contents of, separated with a vertial line. E.g. `user|Weekly Newsletter`. Can be used as an alternative to `template_ID`.
     */
    public string $Owner_TypeTemplate_Name;
    /**
     * Unique numeric ID for the template you want to update the contents of.
     */
    public int $template_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Owner_Type|Template_Name' => is_string($value) ? $this->Owner_TypeTemplate_Name = $value : parent::assignMember($name, $value),
            'template_ID' => is_int($value) ? $this->template_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
