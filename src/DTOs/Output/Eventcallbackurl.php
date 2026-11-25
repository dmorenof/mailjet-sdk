<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Eventcallbackurl extends \MailjetSDK\DTOs\Base\Eventcallbackurl
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Unique numeric ID for the API Key this callback URL is assigned to.
     */
    public int $APIKeyID;
    /**
     * Unique numeric ID for this callback URL.
     */
    public int $ID;
    /**
     * The URL used for this object.
     *
     * > Note: The URL provided cannot be a root URL.
     *
     */
    public string $Url;
    /**
     * Indicates whether the events are sent one at a time to the callback URL, or are grouped.
     *
     * Possible values:
     *
     * - `1` - The events are not grouped and a callback is received for each event individually.
     * - `2` - The events are grouped. A callback for the grouped events is received with a maximum frequency of once per second. We advise to use this value to avoid reaching the API rate limits.
     *
     */
    public int $Version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'APIKeyID' => is_int($value) ? $this->APIKeyID = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'Url' => is_string($value) ? $this->Url = $value : parent::assignMember($name, $value),
            'Version' => is_int($value) ? $this->Version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
