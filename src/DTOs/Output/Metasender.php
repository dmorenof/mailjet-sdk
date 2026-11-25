<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Metasender extends \MailjetSDK\DTOs\Base\Metasender
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Timestamp indicating when this metasender object was created.
     */
    public string $CreatedAt;
    /**
     * The email address for this metasender. Domains are registered with an asterisk in place of the local part - e.g. `*&#64;domain.com`.
     */
    public string $Email;
    /**
     * Filename expected on the domain name webserver. Used to validate the metasender via the `/sender/{sender_id}/validate` resource.
     */
    public string $Filename;
    /**
     * Unique numeric ID for this metasender.
     */
    public int $ID;
    /**
     * Indicates whether the metasender was activated or not.
     */
    public bool $IsEnabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CreatedAt' => is_string($value) ? $this->CreatedAt = $value : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'Filename' => is_string($value) ? $this->Filename = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'IsEnabled' => is_bool($value) ? $this->IsEnabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
