<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Template extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'Categories' => 'Categories',
        'CategoriesSelectionMethod' => 'CategoriesSelectionMethod',
        'EditMode' => 'EditMode',
        'Name' => 'Name',
        'OwnerType' => 'OwnerType',
        'Purposes' => 'Purposes',
        'PurposesSelectionMethod' => 'PurposesSelectionMethod',
    ],
    'header' => [],
];

    public ?string $Categories;
    public ?string $CategoriesSelectionMethod;
    public ?int $EditMode;
    public ?string $Name;
    public ?string $OwnerType;
    public ?string $Purposes;
    public ?string $PurposesSelectionMethod;
}
