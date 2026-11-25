<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewNewsletterTest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'Recipients',
    ];

    /**
     * A JSON array of recipient objects containing `Email` and `Name`. Including the recipient Name is optional.
     */
    public \MailjetSDK\Collections\NewNewsletterTest\RecipientsCollection $Recipients;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Recipients' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Recipients = new \MailjetSDK\Collections\NewNewsletterTest\RecipientsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MailjetSDK\DTOs\ArrayNewsletterTestRecipients::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
