<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class LinkClick extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Total number of click events for this link.
     */
    public int $ClickedEventsCount;
    /**
     * Total number of messages, where this link was clicked at least once.
     */
    public int $ClickedMessagesCount;
    /**
     * The position index of the URL link within the HTML content.
     */
    public int $PositionIndex;
    /**
     * The URL, as originally inserted in the campaign HTML content.
     */
    public string $URL;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ClickedEventsCount' => is_int($value) ? $this->ClickedEventsCount = $value : parent::assignMember($name, $value),
            'ClickedMessagesCount' => is_int($value) ? $this->ClickedMessagesCount = $value : parent::assignMember($name, $value),
            'PositionIndex' => is_int($value) ? $this->PositionIndex = $value : parent::assignMember($name, $value),
            'URL' => is_string($value) ? $this->URL = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
