<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Contactslist extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Address' => 'Address',
            'ExcludeID' => 'ExcludeID',
            'IsDeleted' => 'IsDeleted',
            'Name' => 'Name',
        ],
        'header' => [],
    ];

    public ?string $Address;
    public ?int $ExcludeID;
    public ?bool $IsDeleted;
    public ?string $Name;
}
