<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class StatcountersQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Defines the timescale of aggregation for your statistics.
     *
     * Possible values:
     *
     * - `Highest` (5-minute intervals)
     * - `Hour`
     * - `Day`
     * - `Lifetime` : cannot be used with `CounterTiming=Event`.
     *
     */
    public string $CounterResolution;
    /**
     * Defines the scope of aggregation for your statistics.
     *
     * Possible values:
     *
     * - `Campaign`
     * - `APIKey`
     * - `List` : Contact list. Can only be used with `CounterTiming=Message&CounterResolution=Lifetime`.
     * - `Sender` : Sender email address. Can only be used with `CounterTiming=Message`
     *
     */
    public string $CounterSource;
    /**
     * Defines the reference timestamp for aggregation of statistics. [More information](/docs/email-api/statistics/key-performance-stats)
     *
     * Possible values:
     *
     * - `Message`
     * - `Event`
     *
     * > Note: If you select `CounterTiming=Event`, you will not be able to choose `CounterResolution=Lifetime`, as retrieving statistics with event-based timings needs a specific timescale to illustrate the evolution of the stats.
     *
     */
    public string $CounterTiming;
    /**
     * Retrieve statistics for messages sent after the specified timestamp. Mandatory when `CounterResolution` is different from `Lifetime`. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     *
     * > Note: The maximum time period that can be selected between `FromTS`and `ToTS` equals 100 times the timescale selected for `CounterResolution`. So if `CounterResolution=Highest`, the period will be 500 minutes (8 hours and 20 minutes); if `CounterResolution=Hour`, it's 100 hours (4 days and 4 hours); if `CounterResolution=Day`, it's 100 days.
     *
     */
    public string $FromTS;
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
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
    /**
     * List of either Campaign IDs or ContactsList IDs (separated by commas). Mandatory when `CounterSource` indicates `Campaign`, `List` or `Sender`.
     */
    public int $SourceID;
    /**
     * Retrieve statistics for messages sent before the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     *
     * > Note: The maximum time period that can be selected between `FromTS`and `ToTS` equals 100 times the timescale selected for `CounterResolution`. So if `CounterResolution=Highest`, the period will be 500 minutes (8 hours and 20 minutes); if `CounterResolution=Hour`, it's 100 hours (4 days and 4 hours); if `CounterResolution=Day`, it's 100 days.
     *
     */
    public string $ToTS;
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
            'CounterResolution' => is_string($value) ? $this->CounterResolution = $value : parent::assignMember($name, $value),
            'CounterSource' => is_string($value) ? $this->CounterSource = $value : parent::assignMember($name, $value),
            'CounterTiming' => is_string($value) ? $this->CounterTiming = $value : parent::assignMember($name, $value),
            'FromTS' => is_string($value) ? $this->FromTS = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'SourceID' => is_int($value) ? $this->SourceID = $value : parent::assignMember($name, $value),
            'ToTS' => is_string($value) ? $this->ToTS = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
