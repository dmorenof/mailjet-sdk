<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class User extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'IsActivated' => 'IsActivated',
            'NewEmail' => 'NewEmail',
            'UserName' => 'UserName',
        ],
        'header' => [],
    ];

    public ?bool $IsActivated;
    public ?string $NewEmail;
    public ?string $UserName;
}
