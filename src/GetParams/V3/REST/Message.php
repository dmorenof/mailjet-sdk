<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Message extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Campaign' => 'Campaign',
            'Contact' => 'Contact',
            'CustomID' => 'CustomID',
            'Destination' => 'Destination',
            'FromTS' => 'FromTS',
            'FromType' => 'FromType',
            'MessageState' => 'MessageState',
            'MessageStatus' => 'MessageStatus',
            'PlanSubscription' => 'PlanSubscription',
            'SenderID' => 'SenderID',
            'ShowContactAlt' => 'ShowContactAlt',
            'ShowCustomID' => 'ShowCustomID',
            'ShowSubject' => 'ShowSubject',
            'ToTS' => 'ToTS',
        ],
        'header' => [],
    ];

    public ?int $Campaign;
    public ?int $Contact;
    public ?string $CustomID;
    public ?int $Destination;
    public ?string $FromTS;
    public ?int $FromType;
    public ?int $MessageState;
    public ?int $MessageStatus;
    public ?int $PlanSubscription;
    public ?int $SenderID;
    public ?bool $ShowContactAlt;
    public ?bool $ShowCustomID;
    public ?bool $ShowSubject;
    public ?string $ToTS;
}
