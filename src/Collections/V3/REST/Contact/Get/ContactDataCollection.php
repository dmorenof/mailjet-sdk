<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Contact\Get;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MailjetSDK\DTOs\Output\Contact> */
final class ContactDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\Contact::class;
}
