<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class OpeninformationQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves only open events linked to the specified campaign ID.
     */
    public int $CampaignID;
    /**
     * Retrieves only open events linked to contacts from this contact list ID.
     */
    public int $ContactsList;
    /**
     * Retrieves only open event details for the campaign with the specified custom value.
     */
    public string $CustomCampaign;
    /**
     * Retrieves information only about open events that happened after the specified timestamp (`OpenedAt` >= `EventFromTs`). Can be used only if the `CampaignID` query parameter is specified as well. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $EventFromTs;
    /**
     * Retrieves information only about open events that happened before the specified timestamp (`OpenedAt` <= `EventFromTs`). Can be used only if the `CampaignID` query parameter is specified as well. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $EventToTs;
    /**
     * Retrieves only open event details for the campaigns, which used the specified sender email address.
     */
    public string $From;
    /**
     * Retrieves only open event details for the campaigns, which used the specified sender email domain.
     */
    public string $FromDomain;
    /**
     * Retrieves only open event details for the campaign, which used the specified sender ID.
     */
    public int $FromID;
    /**
     * Retrieves information only about open events linked to campaigns sent after the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     *
     * > If no query parameters are used, `FromTS` defaults to the current day at 00:00 UTC.
     *
     */
    public string $FromTS;
    /**
     * Retrieves only open event details for the messages of the specified type:
     *
     * - `1` - Transactional
     * - `2` - Marketing
     * - `3` - Unknown
     *
     */
    public int $FromType;
    /**
     * When true, only open event details for deleted campaigns will be returned. When false, deleted campaigns will be excluded from the response.
     */
    public bool $IsDeleted;
    /**
     * Limit the response to a select number of returned objects.
     *
     * Default value: `10`. Maximum value: `1000`
     *
     */
    public int $Limit;
    /**
     * Retrieves only open events linked to messages with the specified status:
     *
     * - `0` (Processed)
     * - `1` (Queued)
     * - `2` (Sent)
     * - `3` (Opened)
     * - `4` (Clicked)
     * - `5` (Bounce)
     * - `6` (Spam)
     * - `7` (Unsub)
     * - `8` (Blocked)
     * - `9` (SoftBounce)
     * - `10` (HardBounce)
     * - `11` (Deferred)
     *
     */
    public int $MessageStatus;
    /**
     * Retrieve a list of objects starting from a certain offset. Combine this query parameter with `Limit` to retrieve a specific section of the list of objects.
     *
     * Default value: `0`
     *
     */
    public int $Offset;
    /**
     * Retrieves information only about open events registered between the start of the selected period and the current timestamp.
     *
     * - `Day` - since the start of the current day
     * - `Week` - since the start of the current week
     * - `Month` - since the start of the current month
     * - `Year` - since the start of the current year
     *
     */
    public string $Period;
    /**
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
    /**
     * Retrieves information only about open events linked to campaigns sent before the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
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
            'CampaignID' => is_int($value) ? $this->CampaignID = $value : parent::assignMember($name, $value),
            'ContactsList' => is_int($value) ? $this->ContactsList = $value : parent::assignMember($name, $value),
            'CustomCampaign' => is_string($value) ? $this->CustomCampaign = $value : parent::assignMember($name, $value),
            'EventFromTs' => is_string($value) ? $this->EventFromTs = $value : parent::assignMember($name, $value),
            'EventToTs' => is_string($value) ? $this->EventToTs = $value : parent::assignMember($name, $value),
            'From' => is_string($value) ? $this->From = $value : parent::assignMember($name, $value),
            'FromDomain' => is_string($value) ? $this->FromDomain = $value : parent::assignMember($name, $value),
            'FromID' => is_int($value) ? $this->FromID = $value : parent::assignMember($name, $value),
            'FromTS' => is_string($value) ? $this->FromTS = $value : parent::assignMember($name, $value),
            'FromType' => is_int($value) ? $this->FromType = $value : parent::assignMember($name, $value),
            'IsDeleted' => is_bool($value) ? $this->IsDeleted = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'MessageStatus' => is_int($value) ? $this->MessageStatus = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Period' => is_string($value) ? $this->Period = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'ToTS' => is_string($value) ? $this->ToTS = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
