<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\NewSendAPIv31Send\MessagesItem;

final class AttachmentsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Base64Content',
    'ContentType',
    'Filename',
];

    /**
     * Base64 encoded content of the attached file.
     * Format: Base64 encoded content
     */
    public string $Base64Content;
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
            'Base64Content' => is_string($value) ? $this->Base64Content = $value : parent::assignMember($name, $value),
            'ContentType' => is_string($value) ? $this->ContentType = $value : parent::assignMember($name, $value),
            'Filename' => is_string($value) ? $this->Filename = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
