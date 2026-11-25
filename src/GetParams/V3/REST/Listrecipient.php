<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Listrecipient extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'Active' => 'Active',
        'Blocked' => 'Blocked',
        'Contact' => 'Contact',
        'ContactEmail' => 'ContactEmail',
        'ContactsList' => 'ContactsList',
        'IgnoreDeleted' => 'IgnoreDeleted',
        'IsExcludedFromCampaigns' => 'IsExcludedFromCampaigns',
        'LastActivityAt' => 'LastActivityAt',
        'ListName' => 'ListName',
        'Opened' => 'Opened',
        'Unsub' => 'Unsub',
    ],
    'header' => [],
];

    public ?bool $Active;
    public ?bool $Blocked;
    public ?int $Contact;
    public ?string $ContactEmail;
    public ?int $ContactsList;
    public ?bool $IgnoreDeleted;
    public ?bool $IsExcludedFromCampaigns;
    public ?string $LastActivityAt;
    public ?string $ListName;
    public ?bool $Opened;
    public ?bool $Unsub;
}
