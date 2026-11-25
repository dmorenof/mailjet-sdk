<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class CampaignoverviewQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When true, will retrieve all campaigns, drafts and AB Testing objects that are not deleted (`IsDeleted`!=`0`). When false, both deleted and non-deleted ones will be retrieved.
     *
     * Default value: `false`
     *
     * > Note: You cannot set more than one status query parameter (`All`, `Archived`, `Drafts`, `Programmed`, `Sent`, `Starred`) to `True`.
     *
     */
    public bool $All;
    /**
     * When true, will retrieve all archived campaigns, drafts and AB Testing objects. When false, archived ones are excluded from the response.
     *
     * Default value: `false`
     *
     * > Note: You cannot set more than one status query parameter (`All`, `Archived`, `Drafts`, `Programmed`, `Sent`, `Starred`) to `True`.
     *
     */
    public bool $Archived;
    /**
     * When true, will retrieve all drafts (and AB Testing objects in Draft mode). When false, both drafts and sent campaigns / AB Testing objects will be retrieved.
     *
     * Default value: `false`
     *
     * > Note: You cannot set more than one status query parameter (`All`, `Archived`, `Drafts`, `Programmed`, `Sent`, `Starred`) to `True`.
     *
     */
    public bool $Drafts;
    /**
     * Retrieves only the draft, sent campaign or AB testing object linked to this unique numeric ID.
     *
     * > Note: Mandatory, when the `ID` query parameter is used.
     *
     */
    public int $ID;
    /**
     * Retrieves only objects of the specified type:
     *
     * - Campaign - Sent campaign
     * - AX - AB Testing object
     * - NL - Draft
     *
     * > Note: Mandatory, when the `ID` query parameter is used.
     *
     */
    public string $IDType;
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
     * When true, will retrieve only drafts that are scheduled for sending - i.e. with `Programmed` status. When false, both programmed and draft / sent / deleted objects will be retrieved.
     *
     * Default value: `false`
     *
     * > Note: You cannot set more than one status query parameter (`All`, `Archived`, `Drafts`, `Programmed`, `Sent`, `Starred`) to `True`.
     *
     */
    public bool $Programmed;
    /**
     * When true, will retrieve only sent campaigns. When false, both sent and not sent objects will be retrieved.
     *
     * > Note: You cannot set more than one status query parameter (`All`, `Archived`, `Drafts`, `Programmed`, `Sent`, `Starred`) to `True`.
     *
     */
    public bool $Sent;
    /**
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
    /**
     * When true, will retrieve only starred campaigns, drafts and AB Testing objects. When false, both starred and non-starred ones will be retrieved.
     *
     * Default value: `false`
     *
     * > Note: You cannot set more than one status query parameter (`All`, `Archived`, `Drafts`, `Programmed`, `Sent`, `Starred`) to `True`.
     *
     */
    public bool $Starred;
    /**
     * Retrieves only campaigns, drafts and AB Testing objects with the specified subject line.
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
            'All' => is_bool($value) ? $this->All = $value : parent::assignMember($name, $value),
            'Archived' => is_bool($value) ? $this->Archived = $value : parent::assignMember($name, $value),
            'Drafts' => is_bool($value) ? $this->Drafts = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'IDType' => is_string($value) ? $this->IDType = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Programmed' => is_bool($value) ? $this->Programmed = $value : parent::assignMember($name, $value),
            'Sent' => is_bool($value) ? $this->Sent = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'Starred' => is_bool($value) ? $this->Starred = $value : parent::assignMember($name, $value),
            'Subject' => is_string($value) ? $this->Subject = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
