<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class CampaignQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves only the campaign details for the specified Campaign ID.
     */
    public int $CampaignID;
    /**
     * Retrieves only details for campaigns sent to the specified Contact List ID.
     */
    public int $ContactsListID;
    /**
     * Retrieves only details for the campaign with the specified custom value assigned to it.
     */
    public string $CustomCampaign;
    /**
     * Retrieves only details for campaigns, which used the specified sender email address.
     */
    public string $From;
    /**
     * Retrieves only details for campaigns, which used the specified sender email domain.
     */
    public string $FromDomain;
    /**
     * Retrieve only details for campaigns, which used the specified sender ID.
     */
    public int $FromID;
    /**
     * Retrieves only details for campaigns sent after the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $FromTS;
    /**
     * Retrieves only details for campaigns of the specified type:
     *
     * - `1` - Transactional
     * - `2` - Marketing
     * - `3` - Unknown
     *
     */
    public int $FromType;
    /**
     * When true, only details for deleted campaigns will be returned. When false, deleted campaigns will be excluded from the response.
     */
    public bool $IsDeleted;
    /**
     * When true, will return only details for campaigns created by the Newsletter tool (legacy template builder). When false, newsletter campaigns will be excluded from the response.
     */
    public bool $IsNewsletterTool;
    /**
     * When true, will return only details for campaigns marked as starred. When false, starred campaigns will be excluded from the response.
     */
    public bool $IsStarred;
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
     * Retrieves only details for campaigns sent between the start of the selected period and the current timestamp.
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
     * Retrieves only details for campaigns sent before this timestamp.
     */
    public string $ToTS;
    /**
     * Retrieves only details for campaigns that were triggered by this automation workflow ID.
     */
    public int $WorkflowID;
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
            'ContactsListID' => is_int($value) ? $this->ContactsListID = $value : parent::assignMember($name, $value),
            'CustomCampaign' => is_string($value) ? $this->CustomCampaign = $value : parent::assignMember($name, $value),
            'From' => is_string($value) ? $this->From = $value : parent::assignMember($name, $value),
            'FromDomain' => is_string($value) ? $this->FromDomain = $value : parent::assignMember($name, $value),
            'FromID' => is_int($value) ? $this->FromID = $value : parent::assignMember($name, $value),
            'FromTS' => is_string($value) ? $this->FromTS = $value : parent::assignMember($name, $value),
            'FromType' => is_int($value) ? $this->FromType = $value : parent::assignMember($name, $value),
            'IsDeleted' => is_bool($value) ? $this->IsDeleted = $value : parent::assignMember($name, $value),
            'IsNewsletterTool' => is_bool($value) ? $this->IsNewsletterTool = $value : parent::assignMember($name, $value),
            'IsStarred' => is_bool($value) ? $this->IsStarred = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Period' => is_string($value) ? $this->Period = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'ToTS' => is_string($value) ? $this->ToTS = $value : parent::assignMember($name, $value),
            'WorkflowID' => is_int($value) ? $this->WorkflowID = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
