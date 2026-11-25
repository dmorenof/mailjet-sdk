<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Campaign\Get;

final class CampaignDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\Campaign::class;
}
