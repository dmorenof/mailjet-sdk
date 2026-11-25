<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\NewMessageSendAPIv3Send;

final class AttachmentsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Content',
    'ContentType',
    'Filename',
];

    protected const array PROPERTY_MAP = [
    'Content-type' => 'ContentType',
];
    protected const array WIRE_PROPERTY_MAP = [
    'ContentType' => 'Content-type',
];

    /**
     * Base64 encoded content of the attached file.
     * Format: Base64 encoded content
     */
    public string $Content;
    /**
     * Defines the type of content being sent out using a MIME type. See the [official MIME type](https://www.iana.org/assignments/media-types/media-types.xhtml) list for additional information.
     */
    public string $ContentType;
    /**
     * The full name of the file (including the file extension).
     */
    public string $Filename;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Content' => is_string($value) ? $this->Content = $value : parent::assignMember($name, $value),
            'Content-type' => is_string($value) ? $this->ContentType = $value : parent::assignMember($name, $value),
            'Filename' => is_string($value) ? $this->Filename = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
