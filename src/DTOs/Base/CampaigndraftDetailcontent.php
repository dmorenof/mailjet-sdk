<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class CampaigndraftDetailcontent extends \Dmorenof\SdkRuntime\DTO
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
     * A JSON object, where you can list all main headers. The header values override
     * properties such as `Subject` if specified.
     */
    public \MailjetSDK\DTOs\Base\CampaigndraftDetailcontent\HeadersDTO $Headers;
    /**
     * The HTML-formatted part of the message.
     */
    public string $HtmlPart;
    /**
     * The content of the message in MJML.
     *
     * > Note: Any update of the MJMLContent property of the `/campaigndraft/{draft_ID}/detailcontent` resource will not automatically generate the Html-part version of the content. In this case, you should regenerate the Html-part with the MJML tools.
     *
     */
    public string $MJMLContent;
    /**
     * The plain text part of the message.
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
