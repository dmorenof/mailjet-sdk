<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Clickstatistics extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp indicating when the click event occurred.
     */
    public string $ClickedAt;
    /**
     * Delay (in seconds) between the message being opened and the URL link being clicked.
     */
    public int $ClickedDelay;
    /**
     * Unique numeric ID of the contact this click event is linked to.
     */
    public int $ContactID;
    /**
     * Unique numeric ID for this click event.
     */
    public int $ID;
    /**
     * Unique numeric ID of the message this click event is linked to.
     */
    public int $MessageID;
    /**
     * The URL that generated this click event.
     */
    public string $Url;
    /**
     * Unique numeric ID for the user agent (browser) used for this click event.
     */
    public int $UserAgentID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ClickedAt' => is_string($value) ? $this->ClickedAt = $value : parent::assignMember($name, $value),
            'ClickedDelay' => is_int($value) ? $this->ClickedDelay = $value : parent::assignMember($name, $value),
            'ContactID' => is_int($value) ? $this->ContactID = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'MessageID' => is_int($value) ? $this->MessageID = $value : parent::assignMember($name, $value),
            'Url' => is_string($value) ? $this->Url = $value : parent::assignMember($name, $value),
            'UserAgentID' => is_int($value) ? $this->UserAgentID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
