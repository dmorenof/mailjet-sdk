<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Contactslist\ByListID\Verify\Post;

final class VerifyDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Action\IDContactslistVerify::class;
}
