<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\PutV3;

final class NewsletterIdDetailcontentPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'newsletter_ID',
];

    /**
     * Unique numeric ID for the newsletter you want to update the content of.
     */
    public int $newsletter_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'newsletter_ID' => is_int($value) ? $this->newsletter_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
