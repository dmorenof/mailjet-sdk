<?php

declare(strict_types=1);

namespace MailjetSDK\PathParams\V3\REST\Contactslist\ByListID\Verify;

final class ByJobID extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'job_ID',
    'list_ID',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'job_ID' => 'job_ID',
        'list_ID' => 'list_ID',
    ],
    'query' => [],
    'header' => [],
];

    public int $job_ID;
    public int $list_ID;
}
