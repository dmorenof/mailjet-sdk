<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class RecipientEsp extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Total number of messages, which Mailjet attempted to send to the given recipient ESP. Blocked messages are not included in this count.
     */
    public int $AttemptedMessagesCount;
    /**
     * Email click-through rate, based on opened messages, for this ESP.
     */
    public float $ClickThroughRate;
    /**
     * Total number of clicked messages for this recipient ESP.
     */
    public int $ClickedMessagesCount;
    /**
     * Number of messages which were deferred from the given recipient ESP. Mailjet will continue trying to send those messages for 3 days, after which they will become soft-bounced.
     */
    public int $DeferredMessagesCount;
    /**
     * Deferred email rate, based on attempted messages, for this ESP.
     */
    public float $DeferredRate;
    /**
     * Total number of messages, which Mailjet delivered to the given recipient ESP.
     */
    public int $DeliveredMessagesCount;
    /**
     * Name of the recipient's Email Service Provider (ESP). "Others" will display stats for messages sent to all ESPs that are not in the list of recognizable ones (see the `ESP_Name` query parameter).
     */
    public string $ESPName;
    /**
     * Total number of messages, which were hard-bounced from this recipient ESP.
     */
    public int $HardBouncedMessagesCount;
    /**
     * Email hard-bounce rate, based on attempted messages, for this ESP.
     */
    public float $HardBouncedRate;
    /**
     * Email open rate, based on delivered messages, for this ESP.
     */
    public float $OpenRate;
    /**
     * Total number of messages opened by a recipient for this ESP.
     */
    public int $OpenedMessagesCount;
    /**
     * Total number of messages, which were soft-bounced from this recipient ESP.
     */
    public int $SoftBouncedMessagesCount;
    /**
     * Email soft-bounce rate, based on attempted messages, for this ESP.
     */
    public float $SoftBouncedRate;
    /**
     * Number of messages, marked as spam by recipients from this ESP.
     */
    public int $SpamReportsCount;
    /**
     * Rate of spam reports, based on delivered messages, for this ESP.
     */
    public float $SpamReportsRate;
    /**
     * Number of mNumber of messages that a recipient unsubscribed from for this ESP.
     */
    public int $UnsubscribedMessagesCount;
    /**
     * Email unsubscribe rate, based on delivered messages, for this ESP.
     */
    public float $UnsubscribedRate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AttemptedMessagesCount' => is_int($value) ? $this->AttemptedMessagesCount = $value : parent::assignMember($name, $value),
            'ClickThroughRate' => is_float($value) ? $this->ClickThroughRate = $value : parent::assignMember($name, $value),
            'ClickedMessagesCount' => is_int($value) ? $this->ClickedMessagesCount = $value : parent::assignMember($name, $value),
            'DeferredMessagesCount' => is_int($value) ? $this->DeferredMessagesCount = $value : parent::assignMember($name, $value),
            'DeferredRate' => is_float($value) ? $this->DeferredRate = $value : parent::assignMember($name, $value),
            'DeliveredMessagesCount' => is_int($value) ? $this->DeliveredMessagesCount = $value : parent::assignMember($name, $value),
            'ESPName' => is_string($value) ? $this->ESPName = $value : parent::assignMember($name, $value),
            'HardBouncedMessagesCount' => is_int($value) ? $this->HardBouncedMessagesCount = $value : parent::assignMember($name, $value),
            'HardBouncedRate' => is_float($value) ? $this->HardBouncedRate = $value : parent::assignMember($name, $value),
            'OpenRate' => is_float($value) ? $this->OpenRate = $value : parent::assignMember($name, $value),
            'OpenedMessagesCount' => is_int($value) ? $this->OpenedMessagesCount = $value : parent::assignMember($name, $value),
            'SoftBouncedMessagesCount' => is_int($value) ? $this->SoftBouncedMessagesCount = $value : parent::assignMember($name, $value),
            'SoftBouncedRate' => is_float($value) ? $this->SoftBouncedRate = $value : parent::assignMember($name, $value),
            'SpamReportsCount' => is_int($value) ? $this->SpamReportsCount = $value : parent::assignMember($name, $value),
            'SpamReportsRate' => is_float($value) ? $this->SpamReportsRate = $value : parent::assignMember($name, $value),
            'UnsubscribedMessagesCount' => is_int($value) ? $this->UnsubscribedMessagesCount = $value : parent::assignMember($name, $value),
            'UnsubscribedRate' => is_float($value) ? $this->UnsubscribedRate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
