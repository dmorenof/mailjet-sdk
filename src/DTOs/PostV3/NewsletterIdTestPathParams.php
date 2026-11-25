<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\PostV3;

final class NewsletterIdTestPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'newsletter_ID',
];

    /**
     * Unique numeric ID for the newsletter you want to test.
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
