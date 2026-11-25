<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class MetasenderIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'metasender_ID',
    ];

    /**
     * Unique numeric ID of the metasender object you want to retrieve.
     */
    public int $metasender_ID;
    /**
     * The email address of the metasender object you want to retrieve. Can be used as an alternative to `metasender_ID`.
     */
    public string $metasender_email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'metasender_ID' => is_int($value) ? $this->metasender_ID = $value : parent::assignMember($name, $value),
            'metasender_email' => is_string($value) ? $this->metasender_email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
