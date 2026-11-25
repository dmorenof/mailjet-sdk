<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewNewsletterDetailcontent extends \MailjetSDK\DTOs\Base\NewsletterDetailcontent
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
