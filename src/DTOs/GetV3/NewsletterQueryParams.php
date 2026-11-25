<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class NewsletterQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves only the newsletters linked to the specified AXTesting ID.
     */
    public int $AXTesting;
    /**
     * Retrieves only the newsletter linked to the specified Campaign ID.
     */
    public int $Campaign;
    /**
     * Retrieves only the newsletters linked to the specified contact list ID.
     */
    public int $ContactsList;
    /**
     * Retrieves only the newsletters, which were delivered at the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $DeliveredAt;
    /**
     * Retrieves only the newsletters, whose email templates were edited with the specified edit tools:
     *
     *   - `tool` - Legacy drag-and-drop template editor
     *   - `html` - Legacy HTML editor
     *
     */
    public string $EditMode;
    /**
     * When true, will return only archived newsletters. When false, archived newsletters will be excluded from the response.
     */
    public bool $IsArchived;
    /**
     * Only retrieve newsletter objects which already have a corresponding campaign
     */
    public bool $IsCampaign;
    /**
     * When true, will return only deleted newsletters. When false, deleted newsletters will be excluded from the response.
     */
    public bool $IsDeleted;
    /**
     * When true, will return only newsletters which have been sent out, or where a test email was sent out. When false, handled newsletters will be excluded from the response.
     */
    public bool $IsHandled;
    /**
     * When true, will return only starred newsletters. When false, starred newsletters will be excluded from the response.
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
     * When true, will return only newsletters that have been modified after their creation. When false, only non-modified newsletters will be returned.
     *
     * > Note: All newsletters created within the Mailjet app are marked as Modified immediately after creation, while ones created via the API are not.
     *
     */
    public bool $Modified;
    /**
     * Retrieves only the newsletters based on this template.
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
     * Retrieves only the newsletters, which use the specified segmentation ID.
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
     * Retrieves only the newsletters with with the specified status ID:
     *
     *   - `-3` - AXCanceled
     *   - `-2` - Deleted
     *   - `-1` - Archived
     *   - `0` - Draft
     *   - `1` - Programmed (scheduled)
     *   - `2` - Sent
     *   - `3` - AXTested (AB Testing versions sent, but winning version not selected yet)
     *   - `4` - AXSelected (AB Testing winning version selected and sent)
     *
     */
    public string $Status;
    /**
     * Retrieves only the newsletters with the specified Subject line.
     */
    public string $Subject;
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
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            'Subject' => is_string($value) ? $this->Subject = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
