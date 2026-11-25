<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\NewSendAPIv31Send\MessagesItem;

/**
 * A JSON object containing 2 properties - `Email` and `Name`. Specifies the sender name and email address:
 *
 * 1. When `Sender` is not specified, the email address will be used to send the message. In such cases, it must be a valid, activated sender for this account. See the `/sender` and `/metasender` resources for more info.
 *
 * 2. When `Sender` is specified, the `Sender` email address will be used to send the message, while the `From` email address will be displayed in the recipient's inbox. In such cases, it is not necessary for the `From` address to be validated. When the `Sender` and `From` domains differ, the information will be displayed in the inbox as `From {from_email} via / sent on behalf of {sender_domain}`.
 *
 * > Note: If the `From` domain has a DMARC policy in effect (e.g. Yahoo, AOL), the message will not be delivered. Instead, it will either bounce or be considered as Spam.
 *
 */
final class FromDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'Email',
    ];

    /**
     * The `From` email address.
     * Format: email
     */
    public string $Email;
    /**
     * The name of the sender. Will be displayed next to the sender email in the recipient's mailbox.
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
