<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class CampaigngraphstatisticsQueryParams extends \Dmorenof\SdkRuntime\DTO
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
     * Retrieves only statistics for the specified campaign IDs. Multiple IDs can be separated with a comma.
     */
    public string $IDS;
    /**
     * Limit the response to a select number of returned objects.
     *
     * Default value: `10`. Maximum value: `1000`
     *
     */
    public int $Limit;
    /**
     * Retrieve a list of objects starting from a certain offset. Combine this query parameter with `Limit` to retrieve a specific section of the list of objects.
     *
     * Default value: `0`
     *
     */
    public int $Offset;
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
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
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
    /**
     * Set the value of this query parameter to `1` to retrieve the overall number of objects returned by this request for your API Key. No list of results will be returned - the objects will simply be counted.
     *
     * Default value: `0`
     *
     * Note: When you send a request without the `countOnly` query parameter, `Count` and `Total` will only return the number of extracted elements and not the overall number.
     *
     */
    public bool $countOnly;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Click' => is_bool($value) ? $this->Click = $value : parent::assignMember($name, $value),
            'IDS' => is_string($value) ? $this->IDS = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Open' => is_bool($value) ? $this->Open = $value : parent::assignMember($name, $value),
            'Range' => is_string($value) ? $this->Range = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'Spam' => is_bool($value) ? $this->Spam = $value : parent::assignMember($name, $value),
            'Unsub' => is_bool($value) ? $this->Unsub = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
