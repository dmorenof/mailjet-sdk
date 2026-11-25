<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewContactslistVerify extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Type of contact list verfication to run:
     * - `fulllist` -  Verify the entire contact list
     *
     */
    public string $Method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Method' => is_string($value) ? $this->Method = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
