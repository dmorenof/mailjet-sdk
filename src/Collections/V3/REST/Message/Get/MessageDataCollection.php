<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Message\Get;

final class MessageDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\Message::class;
}
