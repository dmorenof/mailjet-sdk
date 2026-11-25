<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Newsletter\ByNewsletterID\Send\Post;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MailjetSDK\DTOs\Action\StatusNewsletterSend> */
final class SendDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Action\StatusNewsletterSend::class;
}
