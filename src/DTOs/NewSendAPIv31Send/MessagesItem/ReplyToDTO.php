<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\NewSendAPIv31Send\MessagesItem;

/**
 * An object containing the email address and name (optional), to which replies to this message will go.
 */
final class ReplyToDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'Email',
    ];

    /**
     * The reply-to email address.
     * Format: email
     */
    public string $Email;
    /**
     * The name of the reply-to contact. Will be displayed next to the reply-to email in the respective mailbox.
     */
    public string $Name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
