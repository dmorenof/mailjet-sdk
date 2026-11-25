<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Update;

final class User extends \MailjetSDK\DTOs\Base\User
{
    public const array REQUIRED_FIELDS = [];

    /**
     * The IP address last used to access this user.
     */
    public string $LastIp;
    /**
     * This user's username. By default the username will be a combination of the first and last name registered in the user's profile - e.g. "John Smith".
     */
    public string $Username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'LastIp' => is_string($value) ? $this->LastIp = $value : parent::assignMember($name, $value),
            'Username' => is_string($value) ? $this->Username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
