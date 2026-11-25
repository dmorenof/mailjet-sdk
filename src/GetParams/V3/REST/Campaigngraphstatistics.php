<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Campaigngraphstatistics extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'IDS',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Click' => 'Click',
            'IDS' => 'IDS',
            'Open' => 'Open',
            'Range' => 'Range',
            'Spam' => 'Spam',
            'Unsub' => 'Unsub',
        ],
        'header' => [],
    ];

    public ?bool $Click;
    public string $IDS;
    public ?bool $Open;
    public ?string $Range;
    public ?bool $Spam;
    public ?bool $Unsub;
}
