<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class NewsletterSchedule extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The timestamp, when the newsletter draft will be sent out. When the newsletter is scheduled for immediate sending, an empty value will be returned.
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
