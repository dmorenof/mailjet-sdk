<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Listrecipientstatistics extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Blocked' => 'Blocked',
            'Bounced' => 'Bounced',
            'Click' => 'Click',
            'Contact' => 'Contact',
            'ContactsList' => 'ContactsList',
            'IsExcludedFromCampaigns' => 'IsExcludedFromCampaigns',
            'IsUnsubscribed' => 'IsUnsubscribed',
            'LastActivityAt' => 'LastActivityAt',
            'MaxLastActivityAt' => 'MaxLastActivityAt',
            'MaxUnsubscribedAt' => 'MaxUnsubscribedAt',
            'MinLastActivityAt' => 'MinLastActivityAt',
            'MinUnsubscribedAt' => 'MinUnsubscribedAt',
            'Open' => 'Open',
            'Queued' => 'Queued',
            'Sent' => 'Sent',
            'ShowExtraData' => 'ShowExtraData',
            'Spam' => 'Spam',
            'TimeZone' => 'TimeZone',
            'Unsubscribed' => 'Unsubscribed',
        ],
        'header' => [],
    ];

    public ?bool $Blocked;
    public ?bool $Bounced;
    public ?bool $Click;
    public ?int $Contact;
    public ?int $ContactsList;
    public ?bool $IsExcludedFromCampaigns;
    public ?bool $IsUnsubscribed;
    public ?string $LastActivityAt;
    public ?string $MaxLastActivityAt;
    public ?string $MaxUnsubscribedAt;
    public ?string $MinLastActivityAt;
    public ?string $MinUnsubscribedAt;
    public ?bool $Open;
    public ?bool $Queued;
    public ?bool $Sent;
    public ?bool $ShowExtraData;
    public ?bool $Spam;
    public ?string $TimeZone;
    public ?bool $Unsubscribed;
}
