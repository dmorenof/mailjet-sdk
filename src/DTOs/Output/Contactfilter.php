<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Contactfilter extends \MailjetSDK\DTOs\Base\Contactfilter
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Unique numeric ID for this segment.
     */
    public int $ID;
    /**
     * Status of this segment. Indicates whether a segment was used for sending or not, or if it was deleted.
     *
     * Possible values:
     *
     * - `used`
     * - `unused`
     * - `deleted`
     *
     */
    public string $Status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
