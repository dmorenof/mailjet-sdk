<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Sender\BySenderID\Validate\Post;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MailjetSDK\DTOs\Output\SenderValidate> */
final class ValidateDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\SenderValidate::class;
}
