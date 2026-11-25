<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Apikey extends \MailjetSDK\DTOs\Base\Apikey
{
    public const array REQUIRED_FIELDS = [];

    /**
     * The unique alphanumeric API Key itself.
     */
    public string $APIKey;
    /**
     * Timestamp indicating when the API Key was created.
     */
    public string $CreatedAt;
    /**
     * Unique numeric ID for this API Key.
     */
    public int $ID;
    /**
     * Indicates whether this is the Primary API Key or not.
     */
    public bool $IsMaster;
    /**
     * Unique user-selected name for this API Key.
     */
    public string $Name;
    /**
     * Indicates the sending limitation applied on this API Key in terms of messages per hour, when the API Key is under quarantine. `0` means no limitation is applied.
     */
    public int $QuarantineValue;
    /**
     * Runlevel, used to indicate data is migrated and reduced performance is expected..
     *
     * Possible values:
     *
     * - `Normal`
     * - `Softlock`
     * - `Hardlock`
     *
     * Default value: `Normal`
     *
     */
    public \MailjetSDK\DTOs\Output\Apikey\RunlevelDTO $Runlevel;
    /**
     * The unique alphanumeric Secret Key (password) linked to this API Key.
     */
    public string $SecretKey;
    /**
     * Deprecated property.
     *
     * @deprecated
     */
    public bool $Skipspamd;
    /**
     * Host to be used when tracking clicks, opens, unsubscribe requests for this API Key.
     *
     * Default value: `r.mailjet.com`
     *
     */
    public string $TrackHost;
    /**
     * User ID. The Primary API Key and all sub-account API Keys will have the same user ID.
     */
    public int $UserID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'APIKey' => is_string($value) ? $this->APIKey = $value : parent::assignMember($name, $value),
            'CreatedAt' => is_string($value) ? $this->CreatedAt = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'IsMaster' => is_bool($value) ? $this->IsMaster = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'QuarantineValue' => is_int($value) ? $this->QuarantineValue = $value : parent::assignMember($name, $value),
            'SecretKey' => is_string($value) ? $this->SecretKey = $value : parent::assignMember($name, $value),
            'Skipspamd' => is_bool($value) ? $this->Skipspamd = $value : parent::assignMember($name, $value),
            'TrackHost' => is_string($value) ? $this->TrackHost = $value : parent::assignMember($name, $value),
            'UserID' => is_int($value) ? $this->UserID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
