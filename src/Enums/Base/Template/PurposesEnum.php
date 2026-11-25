<?php

declare(strict_types=1);

namespace MailjetSDK\Enums\Base\Template;

enum PurposesEnum: string
{
    case Automation = 'automation';
    case Marketing = 'marketing';
    case Transactional = 'transactional';
}
