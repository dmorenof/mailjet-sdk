<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base\TemplateDetailcontent;

/**
 * List of default headers as `{header_name}:{header_value}` pairs.
 */
final class HeadersDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
    'Reply-to' => 'ReplyTo',
];
    protected const array WIRE_PROPERTY_MAP = [
    'ReplyTo' => 'Reply-to',
];

    /**
     * Value should include the sender name and/or email address in the following formats - `john&#64;example.com` or `<john&#64;example.com>` or `"John Doe" <john&#64;example.com>`.
     */
    public string $From;
    /**
     * The reply-to email address for this template.
     */
    public string $ReplyTo;
    /**
     * The subject line for this template.
     */
    public string $Subject;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'From' => is_string($value) ? $this->From = $value : parent::assignMember($name, $value),
            'Reply-to' => is_string($value) ? $this->ReplyTo = $value : parent::assignMember($name, $value),
            'Subject' => is_string($value) ? $this->Subject = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
