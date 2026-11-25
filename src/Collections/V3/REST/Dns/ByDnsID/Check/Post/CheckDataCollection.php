<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Dns\ByDnsID\Check\Post;

final class CheckDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\DnsCheck::class;
}
