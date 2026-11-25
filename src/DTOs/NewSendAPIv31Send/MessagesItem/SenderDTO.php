<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\NewSendAPIv31Send\MessagesItem;

/**
 * A JSON object containing 2 properties - `Email` and `Name`. Specifies the sender name and email address. Used when you want to send emails on behalf of a different email address. Must be a valid, activated sender for this account. See the `/sender` and `/metasender` resources for more info. Only `Email` is a mandatory property within this object.
 *
 * The `Sender` email address will be used to send the message, while the `From` email address will be displayed in the recipient's inbox. In such cases, it is not necessary for the `From` address to be verified. However, the information will be displayed in the inbox as `From {from_email} via / sent on behalf of {sender_domain}`.
 *
 * > Note: This option is disabled by default and is no longer available for new setups. Existing Default Sender configurations continue to work, but Mailjet no longer enables this functionality on new requests.
 *
 */
final class SenderDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Email',
];

    /**
     * The email address used to send the message.
     * Format: email
     */
    public string $Email;
    /**
     * User-selected name for the `Sender` email address.
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
