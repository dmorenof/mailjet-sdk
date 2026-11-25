<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Message\Get;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MailjetSDK\DTOs\Output\Message> */
final class MessageDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\Message::class;
}
