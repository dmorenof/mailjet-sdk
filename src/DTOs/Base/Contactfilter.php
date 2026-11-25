<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Contactfilter extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A description of the segment you can add for convenience, or to easier understand its functionality.
     */
    public string $Description;
    /**
     * The rule, based on which the segment is calculated. Refer to our [Segmentation Guide](/docs/email-api/segmentation/segmentation-overview) for detailed information on the syntax.
     */
    public string $Expression;
    /**
     * User-selected name for this segment.
     */
    public string $Name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Description' => is_string($value) ? $this->Description = $value : parent::assignMember($name, $value),
            'Expression' => is_string($value) ? $this->Expression = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
