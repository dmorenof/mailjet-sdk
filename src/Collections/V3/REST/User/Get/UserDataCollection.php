<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\User\Get;

final class UserDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\User::class;
}
