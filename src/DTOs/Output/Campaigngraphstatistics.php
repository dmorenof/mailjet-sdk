<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Campaigngraphstatistics extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Number of clicked messages for this time interval. The proper count is returned if the `Click` parameter is set as true. Otherwise the click count will not be calculated and a `-1` value will be returned instead.
     */
    public int $Clickcount;
    /**
     * Unique numeric ID for the campaign.
     */
    public int $ID;
    /**
     * Number of opened messages for this time interval. The proper count is returned if the `Open` parameter is set as true. Otherwise the open count will not be calculated and a `-1` value will be returned instead.
     */
    public int $Opencount;
    /**
     * Number of messages marked as spam for this time interval. The proper count is returned if the `Spam` parameter is set as true. Otherwise will the spam count will not be calculated and a `-1` value will be returned instead.
     */
    public int $Spamcount;
    /**
     * The time lapsed since the start of the campaigns, in seconds.
     */
    public int $Tick;
    /**
     * Number of unsubscribe events for this time interval. The proper count is returned if the `Unsub` parameter is set as true. Otherwise will the unsubscribe count will not be calculated and a `-1` value will be returned instead.
     */
    public int $Unsubcount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Clickcount' => is_int($value) ? $this->Clickcount = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'Opencount' => is_int($value) ? $this->Opencount = $value : parent::assignMember($name, $value),
            'Spamcount' => is_int($value) ? $this->Spamcount = $value : parent::assignMember($name, $value),
            'Tick' => is_int($value) ? $this->Tick = $value : parent::assignMember($name, $value),
            'Unsubcount' => is_int($value) ? $this->Unsubcount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
