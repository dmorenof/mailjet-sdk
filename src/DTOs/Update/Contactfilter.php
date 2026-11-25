<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Update;

final class Contactfilter extends \MailjetSDK\DTOs\Base\Contactfilter
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Status of this segment. Indicates whether a segment was used for sending or not, or if it was deleted. The only status that can be updated manually is that of a `deleted` segment - to `unused`. This way you can reactivate an already deleted segment.
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
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
