<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class ContactslistManageContact extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * User-defined name for the contact.
     */
    public string $Name;
    /**
     * A JSON object containing contact properties and their values. Each property is listed with its name as the parameter name,  and the property value as the parameter value. The properties must have been created beforehand.
     */
    public \MailjetSDK\DTOs\Base\ContactslistManageContact\PropertiesDTO $Properties;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
