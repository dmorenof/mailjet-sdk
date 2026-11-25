<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ListrecipientQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves only list recipients with the respective active subscription status (`IsActive` value).
     *
     * @deprecated
     */
    public bool $Active;
    /**
     * When true, will retrieve only recipients that have email block events linked to them. When false, blocked recipients will be excluded from the response.
     *
     * > Note: Available only for accounts created before April 5th, 2018.
     *
     */
    public bool $Blocked;
    /**
     * Retrieves only list recipients linked to this Contact ID.
     */
    public int $Contact;
    /**
     * Retrieves only list recipients linked to this contact email address.
     */
    public string $ContactEmail;
    /**
     * Retrieves only list recipients linked to this contact list ID.
     */
    public int $ContactsList;
    /**
     * When true, will exclude recipients linked to deleted contact lists from the response. When false, recipients linked to deleted lists will also be retrieved.
     *
     * Default value: `true`
     *
     */
    public bool $IgnoreDeleted;
    /**
     * When true, will retrieve only list recipients that have been added to the exclusion list for marketing emails. When false, those recipients will be excluded from the response.
     */
    public bool $IsExcludedFromCampaigns;
    /**
     * Retrieves only list recipients, whose last registered activity was detected at the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $LastActivityAt;
    /**
     * Limit the response to a select number of returned objects.
     *
     * Default value: `10`. Maximum value: `1000`
     *
     */
    public int $Limit;
    /**
     * Retrieve only the list recipients linked to this contact list name.
     */
    public string $ListName;
    /**
     * Retrieve a list of objects starting from a certain offset. Combine this query parameter with `Limit` to retrieve a specific section of the list of objects.
     *
     * Default value: `0`
     *
     */
    public int $Offset;
    /**
     * When true, will retrieve only recipients that have opened at least one email. When false, recipients with open events will be excluded from the response.
     */
    public bool $Opened;
    /**
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
    /**
     * When true, will retrieve only unsubscribed list recipients (`IsUnsubscribed=true`). When false, unsubscribed recipients will be excluded from the response.
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
            'Active' => is_bool($value) ? $this->Active = $value : parent::assignMember($name, $value),
            'Blocked' => is_bool($value) ? $this->Blocked = $value : parent::assignMember($name, $value),
            'Contact' => is_int($value) ? $this->Contact = $value : parent::assignMember($name, $value),
            'ContactEmail' => is_string($value) ? $this->ContactEmail = $value : parent::assignMember($name, $value),
            'ContactsList' => is_int($value) ? $this->ContactsList = $value : parent::assignMember($name, $value),
            'IgnoreDeleted' => is_bool($value) ? $this->IgnoreDeleted = $value : parent::assignMember($name, $value),
            'IsExcludedFromCampaigns' => is_bool($value) ? $this->IsExcludedFromCampaigns = $value : parent::assignMember($name, $value),
            'LastActivityAt' => is_string($value) ? $this->LastActivityAt = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'ListName' => is_string($value) ? $this->ListName = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Opened' => is_bool($value) ? $this->Opened = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'Unsub' => is_bool($value) ? $this->Unsub = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
