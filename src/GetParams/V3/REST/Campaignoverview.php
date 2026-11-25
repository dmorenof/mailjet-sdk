<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Campaignoverview extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'All' => 'All',
        'Archived' => 'Archived',
        'Drafts' => 'Drafts',
        'ID' => 'ID',
        'IDType' => 'IDType',
        'Programmed' => 'Programmed',
        'Sent' => 'Sent',
        'Starred' => 'Starred',
        'Subject' => 'Subject',
    ],
    'header' => [],
];

    public ?bool $All;
    public ?bool $Archived;
    public ?bool $Drafts;
    public ?int $ID;
    public ?string $IDType;
    public ?bool $Programmed;
    public ?bool $Sent;
    public ?bool $Starred;
    public ?string $Subject;
}
