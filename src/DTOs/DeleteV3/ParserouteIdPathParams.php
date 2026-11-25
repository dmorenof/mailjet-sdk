<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\DeleteV3;

final class ParserouteIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'parseroute_ID',
];

    /**
     * Unique numeric ID for this parseroute object. Alternatively, you can use the email address associated with this object. Keep in mind that the email address needs to be URL encoded.
     */
    public int $parseroute_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'parseroute_ID' => is_int($value) ? $this->parseroute_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
