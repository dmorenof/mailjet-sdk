<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\DeleteV3;

final class EventcallbackurlIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'url_ID',
];

    /**
     * Unique numeric ID for the callback URL you want to delete.
     */
    public int $url_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'url_ID' => is_int($value) ? $this->url_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
