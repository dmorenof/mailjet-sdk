<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Campaignstatistics extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'AXTesting' => 'AXTesting',
        'Blocked' => 'Blocked',
        'Bounced' => 'Bounced',
        'Click' => 'Click',
        'ContactsList' => 'ContactsList',
        'Deferred' => 'Deferred',
        'FromTS' => 'FromTS',
        'FromType' => 'FromType',
        'GroupAX' => 'GroupAX',
        'Hardbounced' => 'Hardbounced',
        'IsDeleted' => 'IsDeleted',
        'IsStarred' => 'IsStarred',
        'LastActivityAt' => 'LastActivityAt',
        'MaxLastActivityAt' => 'MaxLastActivityAt',
        'MinLastActivityAt' => 'MinLastActivityAt',
        'NewsLetter' => 'NewsLetter',
        'Open' => 'Open',
        'Queued' => 'Queued',
        'Segmentation' => 'Segmentation',
        'Sender' => 'Sender',
        'Sent' => 'Sent',
        'ShowExtraData' => 'ShowExtraData',
        'Softbounced' => 'Softbounced',
        'Spam' => 'Spam',
        'Subject' => 'Subject',
        'ToTS' => 'ToTS',
        'Unsubscribed' => 'Unsubscribed',
        'WorkflowID' => 'WorkflowID',
    ],
    'header' => [],
];

    public ?int $AXTesting;
    public ?bool $Blocked;
    public ?bool $Bounced;
    public ?bool $Click;
    public ?int $ContactsList;
    public ?bool $Deferred;
    public ?string $FromTS;
    public ?int $FromType;
    public ?bool $GroupAX;
    public ?bool $Hardbounced;
    public ?bool $IsDeleted;
    public ?bool $IsStarred;
    public ?string $LastActivityAt;
    public ?string $MaxLastActivityAt;
    public ?string $MinLastActivityAt;
    public ?int $NewsLetter;
    public ?bool $Open;
    public ?bool $Queued;
    public ?int $Segmentation;
    public ?int $Sender;
    public ?bool $Sent;
    public ?bool $ShowExtraData;
    public ?bool $Softbounced;
    public ?bool $Spam;
    public ?string $Subject;
    public ?string $ToTS;
    public ?bool $Unsubscribed;
    public ?int $WorkflowID;
}
