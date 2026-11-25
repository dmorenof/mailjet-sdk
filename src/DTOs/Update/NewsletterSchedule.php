<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Update;

final class NewsletterSchedule extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The timestamp, when the newsletter will be sent out. Use `Now` to send immediately.
     */
    public string $Date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Date' => is_string($value) ? $this->Date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
