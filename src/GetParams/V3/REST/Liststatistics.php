<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Liststatistics extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'Address' => 'Address',
        'CalcExcludedSubscriber' => 'CalcExcludedSubscriber',
        'ContactsListID' => 'ContactsListID',
        'ExcludeID' => 'ExcludeID',
    ],
    'header' => [],
];

    public ?string $Address;
    public ?bool $CalcExcludedSubscriber;
    public ?int $ContactsListID;
    public ?int $ExcludeID;
}
