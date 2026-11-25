<?php

declare(strict_types=1);

namespace MailjetSDK\Responses\V3\Send;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public \MailjetSDK\Collections\V3\Send\Post\SendSentCollection $Sent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Sent' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Sent = new \MailjetSDK\Collections\V3\Send\Post\SendSentCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MailjetSDK\DTOs\Output\SendAPIv3Send::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
