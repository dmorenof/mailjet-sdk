<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\NewMessageSendAPIv3Send;

final class RecipientsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Email',
];

    /**
     * The email address of the recipient.
     * Format: email
     */
    public string $Email;
    /**
     * The name of the recipient. Will be displayed next to the email in the recipient's mailbox.
     */
    public string $Name;
    /**
     * Variables used in the message content for this recipient. Specified as a JSON array of `var_name:var_value`. Inserted in the text and/or HTML part of the message as `[[var: var_value]]`.
     *
     */
    public string $Vars;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'Vars' => is_string($value) ? $this->Vars = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
