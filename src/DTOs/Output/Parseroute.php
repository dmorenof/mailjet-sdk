<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Parseroute extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique numeric API Key ID to whom this object belongs.
     */
    public int $APIKeyID;
    /**
     * The email address you need to use. Emails sent to this address will be parsed and the information passed on to the webhook URL in JSON format. If no email address is specified in the `POST` payload, Mailjet will create a custom one.
     */
    public string $Email;
    /**
     * Unique numeric ID for this parseroute object.
     */
    public int $ID;
    /**
     * The webhook URL, where you want to receive the parsed email information.
     */
    public string $Url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'APIKeyID' => is_int($value) ? $this->APIKeyID = $value : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'Url' => is_string($value) ? $this->Url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
