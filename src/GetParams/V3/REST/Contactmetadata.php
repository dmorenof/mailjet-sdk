<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Contactmetadata extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'DataType' => 'DataType',
        'Namespace' => 'Namespace_',
    ],
    'header' => [],
];

    protected const array PROPERTY_MAP = [
    'Namespace' => 'Namespace_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'Namespace_' => 'Namespace',
];

    public ?string $DataType;
    public ?string $Namespace_;
}
