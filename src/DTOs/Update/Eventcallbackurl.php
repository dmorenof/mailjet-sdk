<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Update;

final class Eventcallbackurl extends \MailjetSDK\DTOs\Base\Eventcallbackurl
{
    public const array REQUIRED_FIELDS = [];

    /**
     * The URL used for this object.
     *
     * > Note: The URL provided cannot be a root URL.
     *
     */
    public string $Url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Url' => is_string($value) ? $this->Url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
