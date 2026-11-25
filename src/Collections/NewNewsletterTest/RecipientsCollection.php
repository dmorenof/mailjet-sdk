<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\NewNewsletterTest;

final class RecipientsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\ArrayNewsletterTestRecipients::class;
}
