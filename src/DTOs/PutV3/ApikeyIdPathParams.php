<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\PutV3;

final class ApikeyIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'apikey_ID',
    ];

    /**
     * The API Key you want to update. Can be used as an alternative to `apikey_ID`.
     */
    public string $APIKey;
    /**
     * Unique numeric ID for the API Key you want to update.
     */
    public int $apikey_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'APIKey' => is_string($value) ? $this->APIKey = $value : parent::assignMember($name, $value),
            'apikey_ID' => is_int($value) ? $this->apikey_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
