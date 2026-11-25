<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Sender\BySenderID\Validate\Post;

final class ValidateDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\SenderValidate::class;
}
