<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class TemplateDetailcontent extends \Dmorenof\SdkRuntime\DTO
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
     * List of default headers as `{header_name}:{header_value}` pairs.
     */
    public \MailjetSDK\DTOs\Base\TemplateDetailcontent\HeadersDTO $Headers;
    /**
     * The HTML-formatted content of the template with Mustache-like logic.
     */
    public string $HtmlPart;
    /**
     * The content of the template in MJML.
     */
    public string $MJMLContent;
    /**
     * The plain text content of the template with Mustache-like logic.
     */
    public string $TextPart;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Html-part' => is_string($value) ? $this->HtmlPart = $value : parent::assignMember($name, $value),
            'MJMLContent' => is_string($value) ? $this->MJMLContent = $value : parent::assignMember($name, $value),
            'Text-part' => is_string($value) ? $this->TextPart = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
