<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Campaigndraft\ByDraftID\Send\Post;

final class SendDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Action\StatusCampaigndraftSend::class;
}
