<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Contactfilter extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'ShowDeleted' => 'ShowDeleted',
        'Status' => 'Status',
    ],
    'header' => [],
];

    public ?bool $ShowDeleted;
    public ?string $Status;
}
