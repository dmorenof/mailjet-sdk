<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Campaigndraft\ByDraftID\Status\Get;

final class StatusDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Action\StatusCampaigndraftStatus::class;
}
