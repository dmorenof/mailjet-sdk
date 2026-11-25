<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Openinformation extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp indicating when the message arrived in the recipient's mailbox.
     */
    public string $ArrivedAt;
    /**
     * Unique numeric ID of the campaign this open event is linked to.
     */
    public int $CampaignID;
    /**
     * Unique numeric ID of the contact this open event is linked to.
     */
    public int $ContactID;
    /**
     * Unique numeric ID for this open event. Not returned by the API.
     *
     * @deprecated
     */
    public int $ID;
    /**
     * Unique numeric ID of the message this open event is linked to.
     */
    public int $MessageID;
    /**
     * Timestamp indicating when the message was opened by the reader for the first time.
     */
    public string $OpenedAt;
    /**
     * Original User Agent String used to view this message.
     */
    public string $UserAgentFull;
    /**
     * Unique numeric ID for the user agent (browser) used for this click event.
     */
    public int $UserAgentID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ArrivedAt' => is_string($value) ? $this->ArrivedAt = $value : parent::assignMember($name, $value),
            'CampaignID' => is_int($value) ? $this->CampaignID = $value : parent::assignMember($name, $value),
            'ContactID' => is_int($value) ? $this->ContactID = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'MessageID' => is_int($value) ? $this->MessageID = $value : parent::assignMember($name, $value),
            'OpenedAt' => is_string($value) ? $this->OpenedAt = $value : parent::assignMember($name, $value),
            'UserAgentFull' => is_string($value) ? $this->UserAgentFull = $value : parent::assignMember($name, $value),
            'UserAgentID' => is_int($value) ? $this->UserAgentID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
