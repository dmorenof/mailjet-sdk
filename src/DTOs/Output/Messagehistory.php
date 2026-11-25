<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Messagehistory extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A comment providing additional details in case of issues with the message delivery.
     */
    public string $Comment;
    /**
     * Unix timestamp indicating when the event was registered.
     */
    public int $EventAt;
    /**
     * The type of this event.
     *
     * Possible values:
     *
     * - `sent`
     * - `opened`
     * - `clicked`
     * - `bounced`
     * - `blocked`
     * - `unsub`
     * - `spam`
     *
     */
    public string $EventType;
    /**
     * When the message is not successfully delivered, will display the reason for non-delivery.
     */
    public string $State;
    /**
     * User agent (browser) used to trigger the event (when applicable).
     */
    public string $Useragent;
    /**
     * Unique numeric ID of the user agent (browser) used to trigger this event.
     */
    public int $UseragentID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Comment' => is_string($value) ? $this->Comment = $value : parent::assignMember($name, $value),
            'EventAt' => is_int($value) ? $this->EventAt = $value : parent::assignMember($name, $value),
            'EventType' => is_string($value) ? $this->EventType = $value : parent::assignMember($name, $value),
            'State' => is_string($value) ? $this->State = $value : parent::assignMember($name, $value),
            'Useragent' => is_string($value) ? $this->Useragent = $value : parent::assignMember($name, $value),
            'UseragentID' => is_int($value) ? $this->UseragentID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
