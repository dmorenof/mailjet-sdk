<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\NewNewsletterTest;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MailjetSDK\DTOs\ArrayNewsletterTestRecipients> */
final class RecipientsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\ArrayNewsletterTestRecipients::class;
}
