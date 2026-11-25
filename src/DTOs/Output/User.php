<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class User extends \MailjetSDK\DTOs\Base\User
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Timestamp indicating when this user was created.
     */
    public string $CreatedAt;
    /**
     * The IP address first used to access this user.
     */
    public string $FirstIp;
    /**
     * Unique numeric User ID.
     */
    public int $ID;
    /**
     * The IP address last used to access this user.
     */
    public string $LastIp;
    /**
     * The maximum allowed number of API Keys that can be created for this user.
     */
    public int $MaxAllowedAPIKeys;
    /**
     * This user's username. By default the username will be a combination of the first and last name registered in the user's profile - e.g. "John Smith".
     */
    public string $Username;
    /**
     * Timestamp indicating when this user was last warned about hitting their rate limit.
     */
    public string $WarnedRatelimitAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CreatedAt' => is_string($value) ? $this->CreatedAt = $value : parent::assignMember($name, $value),
            'FirstIp' => is_string($value) ? $this->FirstIp = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'LastIp' => is_string($value) ? $this->LastIp = $value : parent::assignMember($name, $value),
            'MaxAllowedAPIKeys' => is_int($value) ? $this->MaxAllowedAPIKeys = $value : parent::assignMember($name, $value),
            'Username' => is_string($value) ? $this->Username = $value : parent::assignMember($name, $value),
            'WarnedRatelimitAt' => is_string($value) ? $this->WarnedRatelimitAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
