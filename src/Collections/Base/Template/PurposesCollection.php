<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\Base\Template;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MailjetSDK\Enums\Base\Template\PurposesEnum> */
final class PurposesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\Enums\Base\Template\PurposesEnum::class;
}
