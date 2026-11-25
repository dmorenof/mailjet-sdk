<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Myprofile extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'User' => 'User',
        ],
        'header' => [],
    ];

    public ?int $User;
}
