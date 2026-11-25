<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST\Campaigngraphstatistics;

final class ByCampaignID extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Click' => 'Click',
            'Open' => 'Open',
            'Range' => 'Range',
            'Spam' => 'Spam',
            'Unsub' => 'Unsub',
        ],
        'header' => [],
    ];

    public ?bool $Click;
    public ?bool $Open;
    public ?string $Range;
    public ?bool $Spam;
    public ?bool $Unsub;
}
