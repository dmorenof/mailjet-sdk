<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Update;

final class Parseroute extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique numeric API Key ID to whom this object belongs.
     */
    public int $APIKeyID;
    /**
     * The email address you want to use. Emails sent to this address will be parsed and the information passed on to the webhook URL in JSON format.
     */
    public string $Email;
    /**
     * The webhook URL you want to use.
     *
     * > Note: The URL provided cannot be a root URL.
     *
     */
    public string $Url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'APIKeyID' => is_int($value) ? $this->APIKeyID = $value : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'Url' => is_string($value) ? $this->Url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
