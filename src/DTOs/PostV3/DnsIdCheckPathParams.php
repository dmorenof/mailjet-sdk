<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\PostV3;

final class DnsIdCheckPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dns_ID',
    ];

    /**
     * Unique numeric ID of the DNS settings of the sender domain you want to validate.
     */
    public int $dns_ID;
    /**
     * The name of the sender domain you want to validate - e.g. `mailjet.com`. Can be used as an alternative to `dns_ID`.
     */
    public string $dns_domain;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dns_ID' => is_int($value) ? $this->dns_ID = $value : parent::assignMember($name, $value),
            'dns_domain' => is_string($value) ? $this->dns_domain = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
