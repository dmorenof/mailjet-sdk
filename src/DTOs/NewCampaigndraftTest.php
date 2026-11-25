<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewCampaigndraftTest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Recipients',
];

    /**
     * A JSON array of recipient objects containing `Email` and `Name`. Including the recipient `Name` is optional.
     */
    public \MailjetSDK\Collections\NewCampaigndraftTest\RecipientsCollection $Recipients;

}
