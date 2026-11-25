<?php

declare(strict_types=1);

namespace MailjetSDK\Responses\V31\Send;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A JSON array containing message objects.
     */
    public \MailjetSDK\Collections\V31\Send\Post\SendMessagesCollection $Messages;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Messages = new \MailjetSDK\Collections\V31\Send\Post\SendMessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MailjetSDK\DTOs\Output\SendAPIv31Send::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
