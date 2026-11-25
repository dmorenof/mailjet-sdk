<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Eventcallbackurl extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The type of event that is being tracked.
     *
     * Possible values:
     *
     * - `open`
     * - `click`
     * - `bounce`
     * - `spam`
     * - `blocked`
     * - `unsub`
     * - `sent`
     *
     * Default value: `open`
     *
     */
    public string $EventType;
    /**
     * Indicates whether this is a backup URL or not. The backup URL will be used in case the primary one is suspended.
     */
    public bool $IsBackup;
    /**
     * Defines whether the callback URL is active or not.
     *
     * Possible values:
     *
     * - `dead`
     * - `alive`
     *
     */
    public string $Status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'EventType' => is_string($value) ? $this->EventType = $value : parent::assignMember($name, $value),
            'IsBackup' => is_bool($value) ? $this->IsBackup = $value : parent::assignMember($name, $value),
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
