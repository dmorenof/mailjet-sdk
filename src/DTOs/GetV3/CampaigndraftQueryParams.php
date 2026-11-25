<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class CampaigndraftQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves only the campaign draft linked to the specified AXTesting ID.
     */
    public int $AXTesting;
    /**
     * Retrieves only the campaign draft linked to the specified Campaign ID.
     */
    public int $Campaign;
    /**
     * Retrieves only the campaign drafts linked to the specified contact list ID.
     */
    public int $ContactsList;
    /**
     * Retrieves only the campaign drafts, which were delivered at the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $DeliveredAt;
    /**
     * Retrieves only campaign drafts, whose email templates were edited with the specified edit tool.
     *
     * Possible values:
     *
     * - `tool2` - Passport drag-and-drop template editor
     * - `html2` - HTML editor in Passport
     * - `mjml` - MJML editor in Passport
     *
     */
    public string $EditMode;
    /**
     * When true, will return only archived campaign drafts. When false, archived campaign drafts will be excluded from the response.
     */
    public bool $IsArchived;
    /**
     * Only retrieves campaigndraft resources for which IsCampaign equals
     * the specified value.
     */
    public bool $IsCampaign;
    /**
     * When true, will return only deleted campaign drafts. When false, deleted drafts will be excluded from the response.
     */
    public bool $IsDeleted;
    /**
     * Only retrieves campaigndraft resources for which IsHandled equals
     * the specified value.
     */
    public bool $IsHandled;
    /**
     * When true, will return only starred campaign drafts. When false, starred drafts will be excluded from the response.
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
     * When true, will return only campaign drafts that have been modified after their creation. When false, only non-modified drafts will be returned.
     *
     * > Note: All campaign drafts created within the Mailjet app are marked as Modified immediately after creation, while ones created via the API are not.
     *
     */
    public bool $Modified;
    /**
     * Only retrieves `campaigndraft` resources for which `NewsLetterTemplate`
     * equals the specified value.
     */
    public int $NewsLetterTemplate;
    /**
     * Retrieve a list of objects starting from a certain offset. Combine this query parameter with `Limit` to retrieve a specific section of the list of objects.
     *
     * Default value: `0`
     *
     */
    public int $Offset;
    /**
     * Retrieves only campaign drafts, which use the specified segmentation ID.
     */
    public int $Segmentation;
    /**
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
    /**
     * Retrieves only campaign drafts with the specified campaign status ID.
     *
     * Possible values:
     *
     * - `-3` - AXCanceled
     * - `-2` - Deleted
     * - `-1` - Archived
     * - `0` - Draft
     * - `1` - Programmed (scheduled)
     * - `2` - Sent
     * - `3` - AXTested (AB Testing versions sent, but winning version not selected yet)
     * - `4` - AXSelected (AB Testing winning version selected and sent)
     *
     */
    public int $Status;
    /**
     * Retrieves only campaign drafts with the specified Subject line.
     */
    public string $Subject;
    /**
     * Retrieves only campaign drafts which use the specified Template ID.
     */
    public int $Template;
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
            'AXTesting' => is_int($value) ? $this->AXTesting = $value : parent::assignMember($name, $value),
            'Campaign' => is_int($value) ? $this->Campaign = $value : parent::assignMember($name, $value),
            'ContactsList' => is_int($value) ? $this->ContactsList = $value : parent::assignMember($name, $value),
            'DeliveredAt' => is_string($value) ? $this->DeliveredAt = $value : parent::assignMember($name, $value),
            'EditMode' => is_string($value) ? $this->EditMode = $value : parent::assignMember($name, $value),
            'IsArchived' => is_bool($value) ? $this->IsArchived = $value : parent::assignMember($name, $value),
            'IsCampaign' => is_bool($value) ? $this->IsCampaign = $value : parent::assignMember($name, $value),
            'IsDeleted' => is_bool($value) ? $this->IsDeleted = $value : parent::assignMember($name, $value),
            'IsHandled' => is_bool($value) ? $this->IsHandled = $value : parent::assignMember($name, $value),
            'IsStarred' => is_bool($value) ? $this->IsStarred = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'Modified' => is_bool($value) ? $this->Modified = $value : parent::assignMember($name, $value),
            'NewsLetterTemplate' => is_int($value) ? $this->NewsLetterTemplate = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Segmentation' => is_int($value) ? $this->Segmentation = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'Status' => is_int($value) ? $this->Status = $value : parent::assignMember($name, $value),
            'Subject' => is_string($value) ? $this->Subject = $value : parent::assignMember($name, $value),
            'Template' => is_int($value) ? $this->Template = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
