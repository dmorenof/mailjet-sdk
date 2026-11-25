<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Contact\Get;

final class ContactDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\Contact::class;
}
