<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Newsletter\Get;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MailjetSDK\DTOs\Output\Newsletter> */
final class NewsletterDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\Newsletter::class;
}
