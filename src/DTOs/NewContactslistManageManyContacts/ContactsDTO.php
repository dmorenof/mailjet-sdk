<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\NewContactslistManageManyContacts;

final class ContactsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Email',
];

    /**
     * The email address for the contact.
     */
    public string $Email;
    /**
     * When true, the contact will be added to the exclusion list and will not be receiving any marketing emails.
     *
     * Default value: `false`
     *
     */
    public bool $IsExcludedFromCampaigns;
    /**
     * User-selected name for the contact.
     */
    public string $Name;
    /**
     * A JSON object containing contact properties and their values. Each property is listed with its name as the parameter name, and the property value as the parameter value. The property objects must have been created beforehand via the `/contactmetadata` resource.
     */
    public \MailjetSDK\DTOs\NewContactslistManageManyContacts\ContactsItem\PropertiesDTO $Properties;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'IsExcludedFromCampaigns' => is_bool($value) ? $this->IsExcludedFromCampaigns = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
