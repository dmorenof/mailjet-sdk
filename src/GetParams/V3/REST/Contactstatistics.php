<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Contactstatistics extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Blocked' => 'Blocked',
            'Bounced' => 'Bounced',
            'Click' => 'Click',
            'Deferred' => 'Deferred',
            'Hardbounced' => 'Hardbounced',
            'LastActivityAt' => 'LastActivityAt',
            'MaxLastActivityAt' => 'MaxLastActivityAt',
            'MinLastActivityAt' => 'MinLastActivityAt',
            'Open' => 'Open',
            'Queued' => 'Queued',
            'Recalculate' => 'Recalculate',
            'Sent' => 'Sent',
            'Softbounced' => 'Softbounced',
            'Spam' => 'Spam',
            'Unsubscribed' => 'Unsubscribed',
        ],
        'header' => [],
    ];

    public ?bool $Blocked;
    public ?bool $Bounced;
    public ?bool $Click;
    public ?bool $Deferred;
    public ?bool $Hardbounced;
    public ?string $LastActivityAt;
    public ?string $MaxLastActivityAt;
    public ?string $MinLastActivityAt;
    public ?bool $Open;
    public ?bool $Queued;
    public ?bool $Recalculate;
    public ?bool $Sent;
    public ?bool $Softbounced;
    public ?bool $Spam;
    public ?bool $Unsubscribed;
}
