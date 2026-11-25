<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class CampaigndraftDetailcontent extends \MailjetSDK\DTOs\Base\CampaigndraftDetailcontent
{
    public const array REQUIRED_FIELDS = [];

    protected const array PROPERTY_MAP = [
        'Html-part' => 'HtmlPart',
        'Text-part' => 'TextPart',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'HtmlPart' => 'Html-part',
        'TextPart' => 'Text-part',
    ];
}
