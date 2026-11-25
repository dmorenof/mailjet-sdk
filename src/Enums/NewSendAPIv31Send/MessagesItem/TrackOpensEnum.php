<?php

declare(strict_types=1);

namespace MailjetSDK\Enums\NewSendAPIv31Send\MessagesItem;

enum TrackOpensEnum: string
{
    case AccountDefault = 'account_default';
    case Anon = 'anon';
    case Disabled = 'disabled';
    case Enabled = 'enabled';
}
