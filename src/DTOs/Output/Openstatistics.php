<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Openstatistics extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Number of opened messages.
     */
    public int $OpenedCount;
    /**
     * Average delay (in seconds) between the sending of the message and the open event.
     */
    public float $OpenedDelay;
    /**
     * Number of processed messages.
     */
    public int $ProcessedCount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'OpenedCount' => is_int($value) ? $this->OpenedCount = $value : parent::assignMember($name, $value),
            'OpenedDelay' => is_float($value) ? $this->OpenedDelay = $value : parent::assignMember($name, $value),
            'ProcessedCount' => is_int($value) ? $this->ProcessedCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
