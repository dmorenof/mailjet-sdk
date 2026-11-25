<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Dns\ByDnsID\Check\Post;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MailjetSDK\DTOs\Output\DnsCheck> */
final class CheckDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\DnsCheck::class;
}
