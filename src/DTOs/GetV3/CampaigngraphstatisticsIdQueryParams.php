<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class CampaigngraphstatisticsIdQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When true, will retrieve the number of clicked messages in `ClickedCount`. Otherwise the click count is not calculated and a `-1` value is returned instead.
     *
     * Default value: `false`
     *
     * > Note: At least one of the `Open`, `Click`, `Unsub` or `Spam` query parameters must be set to `true`.
     *
     */
    public bool $Click;
    /**
     * When true, will retrieve the number of opened messages in `OpenedCount`. Otherwise the open count is not calculated and a `-1` value is returned instead.
     *
     * Default value: `false`
     *
     * > Note: At least one of the `Open`, `Click`, `Unsub` or `Spam` query parameters must be set to `true`.
     *
     */
    public bool $Open;
    /**
     * Selects a period of time since the start of the campaign, for which you want to retrieve evolution statistics. If you select `24h` (24 hours), the stat intervals will be 15 minutes long. If `7d` (7 days) is selected, the intervals will be 30 minutes long.
     */
    public string $Range;
    /**
     * When true, will retrieve the number of messages marked as spam in `SpamCount`. Otherwise the spam count is not calculated and a `-1` value is returned instead.
     *
     * Default value: `false`
     *
     * > Note: At least one of the `Open`, `Click`, `Unsub` or `Spam` query parameters must be set to `true`.
     *
     */
    public bool $Spam;
    /**
     * When true, will retrieve the number of unsubscribe events in `UnsubCount`. Otherwise the unsubscribe count is not calculated and a `-1` value is returned instead.
     *
     * Default value: `false`
     *
     * > Note: At least one of the `Open`, `Click`, `Unsub` or `Spam` query parameters must be set to `true`.
     *
     */
    public bool $Unsub;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Click' => is_bool($value) ? $this->Click = $value : parent::assignMember($name, $value),
            'Open' => is_bool($value) ? $this->Open = $value : parent::assignMember($name, $value),
            'Range' => is_string($value) ? $this->Range = $value : parent::assignMember($name, $value),
            'Spam' => is_bool($value) ? $this->Spam = $value : parent::assignMember($name, $value),
            'Unsub' => is_bool($value) ? $this->Unsub = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
