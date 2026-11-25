<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Contactslistsignup extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unix timestamp indicating when the contact completed the subscription confirmation.
     */
    public int $ConfirmAt;
    /**
     * The IP address detected during the subscription confirmation.
     */
    public string $ConfirmIp;
    /**
     * Unique numeric ID of the contact that made the subscription request.
     */
    public int $ContactID;
    /**
     * Email address of the contact that made the subscription request.
     */
    public string $Email;
    /**
     * Unique numeric ID assigned to this subscription request.
     */
    public int $ID;
    /**
     * Unique numeric ID of the contact list, to which the contact was subscribed.
     */
    public int $ListID;
    /**
     * Unix timestamp indicating when the contact made the subscription request.
     */
    public int $SignupAt;
    /**
     * IP address detected when making the subscription request.
     */
    public string $SignupIp;
    /**
     * Unique confirmation key, which will be added to the URL the contact will receive in their subscription confirmation email.
     */
    public string $SignupKey;
    /**
     * Indicates the source, from which the signup request came.
     */
    public string $Source;
    /**
     * The ID of the widget used for the subscription request.
     */
    public int $SourceId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ConfirmAt' => is_int($value) ? $this->ConfirmAt = $value : parent::assignMember($name, $value),
            'ConfirmIp' => is_string($value) ? $this->ConfirmIp = $value : parent::assignMember($name, $value),
            'ContactID' => is_int($value) ? $this->ContactID = $value : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'ListID' => is_int($value) ? $this->ListID = $value : parent::assignMember($name, $value),
            'SignupAt' => is_int($value) ? $this->SignupAt = $value : parent::assignMember($name, $value),
            'SignupIp' => is_string($value) ? $this->SignupIp = $value : parent::assignMember($name, $value),
            'SignupKey' => is_string($value) ? $this->SignupKey = $value : parent::assignMember($name, $value),
            'Source' => is_string($value) ? $this->Source = $value : parent::assignMember($name, $value),
            'SourceId' => is_int($value) ? $this->SourceId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
