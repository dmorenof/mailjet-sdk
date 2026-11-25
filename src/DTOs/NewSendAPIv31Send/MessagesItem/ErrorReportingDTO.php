<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\NewSendAPIv31Send\MessagesItem;

/**
 * An object containing the email address and name of the recipient, to whom a carbon copy with the error message is sent to in case of sending issues. Can only be used when `TemplateLanguage=true`. Equivalent to using the `X-MJ-TemplateErrorReporting` header through SMTP.
 */
final class ErrorReportingDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Email',
];

    /**
     * The email address, to which the carbon copy of the email with the error message will be sent.
     * Format: email
     */
    public string $Email;
    /**
     * The name of the recipient, to whom the carbon copy of the email with the error message will be sent.
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
