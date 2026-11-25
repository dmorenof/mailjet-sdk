<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Sender extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'DnsID' => 'DnsID',
            'Domain' => 'Domain',
            'Email' => 'Email',
            'IsDomainSender' => 'IsDomainSender',
            'LocalPart' => 'LocalPart',
            'ShowDeleted' => 'ShowDeleted',
            'Status' => 'Status',
        ],
        'header' => [],
    ];

    public ?int $DnsID;
    public ?string $Domain;
    public ?string $Email;
    public ?bool $IsDomainSender;
    public ?string $LocalPart;
    public ?bool $ShowDeleted;
    public ?string $Status;
}
