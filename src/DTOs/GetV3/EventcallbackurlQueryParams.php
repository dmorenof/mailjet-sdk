<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class EventcallbackurlQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When true, will retrieve only backup callback URLs. When false, backup callback URLs will be excluded from the response.
     */
    public bool $Backup;
    /**
     * Retrieves only callback URL objects linked to the specified event type:
     *
     * - `1` - click
     * - `2` - bounce
     * - `3` - spam
     * - `4` - blocked
     * - `5` - unsubscribe
     * - `6` - open
     * - `7` - sent
     *
     */
    public int $EventType;
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
     * Retrieves only callback URL objects with the specified status.
     */
    public string $Status;
    /**
     * Retrieves only callback URL objects with the specified Version.
     *
     * Possible values:
     *
     * - `1` - The events are not grouped and a callback is received for each event individually.
     * - `2` - The events are grouped. A callback for the grouped events is received with a maximum frequency of once per second. Important to use to avoid reaching API rate limits.
     *
     */
    public int $Version;
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
            'Backup' => is_bool($value) ? $this->Backup = $value : parent::assignMember($name, $value),
            'EventType' => is_int($value) ? $this->EventType = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            'Version' => is_int($value) ? $this->Version = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
