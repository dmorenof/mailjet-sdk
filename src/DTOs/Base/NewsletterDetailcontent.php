<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class NewsletterDetailcontent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'Html-part' => 'HtmlPart',
        'Text-part' => 'TextPart',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'HtmlPart' => 'Html-part',
        'TextPart' => 'Text-part',
    ];

    /**
     * The HTML-formatted part of the message.
     */
    public string $HtmlPart;
    /**
     * The plain text part of the message.
     */
    public string $TextPart;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Html-part' => is_string($value) ? $this->HtmlPart = $value : parent::assignMember($name, $value),
            'Text-part' => is_string($value) ? $this->TextPart = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
