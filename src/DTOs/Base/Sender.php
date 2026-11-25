<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Sender extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Type of emails this sender will send. This is for purely informative purposes - the values do not place any sending restrictions on the sender email or domain.
     *
     * - `transactional` - transactional emails
     * - `bulk` - campaign emails
     * - `unknown` - both
     *
     */
    public string $EmailType;
    /**
     * Indicates whether this is the default sender or not.
     */
    public bool $IsDefaultSender;
    /**
     * User-provided name for this sender.
     */
    public string $Name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'EmailType' => is_string($value) ? $this->EmailType = $value : parent::assignMember($name, $value),
            'IsDefaultSender' => is_bool($value) ? $this->IsDefaultSender = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
