<?php

declare(strict_types=1);

namespace MailjetSDK\GetParams\V3\REST;

final class Contactslistsignup extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'Contact' => 'Contact',
        'ContactsList' => 'ContactsList',
        'Domain' => 'Domain',
        'Email' => 'Email',
        'LocalPart' => 'LocalPart',
        'MaxConfirmAt' => 'MaxConfirmAt',
        'MaxSignupAt' => 'MaxSignupAt',
        'MinConfirmAt' => 'MinConfirmAt',
        'MinSignupAt' => 'MinSignupAt',
        'SignupIp' => 'SignupIp',
        'Source' => 'Source',
        'SourceID' => 'SourceID',
    ],
    'header' => [],
];

    public ?int $Contact;
    public ?int $ContactsList;
    public ?string $Domain;
    public ?string $Email;
    public ?string $LocalPart;
    public ?int $MaxConfirmAt;
    public ?int $MaxSignupAt;
    public ?int $MinConfirmAt;
    public ?int $MinSignupAt;
    public ?string $SignupIp;
    public ?string $Source;
    public ?int $SourceID;
}
