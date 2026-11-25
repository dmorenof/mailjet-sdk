<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Newsletter\ByNewsletterID\Schedule\Get;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MailjetSDK\DTOs\Output\NewsletterSchedule> */
final class ScheduleDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\NewsletterSchedule::class;
}
