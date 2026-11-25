<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ListrecipientstatisticsQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When true, will retrieve statistics only for list recipients that have blocked messages. When false, contacts with blocked messages will be excluded from the response.
     */
    public bool $Blocked;
    /**
     * When true, will retrieve statistics only for list recipients that have bounced messages. When false, contacts with bounced messages will be excluded from the response.
     */
    public bool $Bounced;
    /**
     * When true, will retrieve statistics only for list recipients that have messages with registered clicks. When false, contacts with clicked messages will be excluded from the response.
     */
    public bool $Click;
    /**
     * Retrieves only list recipient statistics for the specified contact ID.
     */
    public int $Contact;
    /**
     * Retrieves statistics only for list recipients that are part of the specified contact list ID.
     */
    public int $ContactsList;
    /**
     * When true, will retrieve statistics only for recipients linked to contacts that have been excluded from campaigns. When false, only recipients who are not linked to excluded contacts will be part of the response.
     */
    public bool $IsExcludedFromCampaigns;
    /**
     * When true, will retrieve statistics only for unsubscribed list recipients. When false, unsubscribed recipients will be excluded from the response.
     */
    public bool $IsUnsubscribed;
    /**
     * Retrieves statistics only for list recipients, for which `LastActivityAt` (their last received email, open, click etc.) equals the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
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
     * Retrieves statistics only for list recipients, for which `LastActivityAt` (their last received email, open, click etc.) is before the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $MaxLastActivityAt;
    /**
     * Retrieves statistics only for list recipients, for which `UnsubscribedAt` (the time they unsubscribed) is before the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $MaxUnsubscribedAt;
    /**
     * Retrieves statistics only for list recipients, for which `LastActivityAt` (their last received email, open, click etc.) is after the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $MinLastActivityAt;
    /**
     * Retrieves statistics only for list recipients, for which `UnsubscribedAt` (the time they unsubscribed) is after the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $MinUnsubscribedAt;
    /**
     * Retrieve a list of objects starting from a certain offset. Combine this query parameter with `Limit` to retrieve a specific section of the list of objects.
     *
     * Default value: `0`
     *
     */
    public int $Offset;
    /**
     * When true, will retrieve statistics only for list recipients that have messages with registered opens. When false, contacts with opened messages will be excluded from the response.
     */
    public bool $Open;
    /**
     * When true, will retrieve statistics only for contacts that have queued messages. When false, contacts with queued messages will be excluded from the response.
     */
    public bool $Queued;
    /**
     * When true, will retrieve statistics only for list recipients that have sent messages. When false, contacts with sent messages will be excluded from the response.
     */
    public bool $Sent;
    /**
     * When true, will display the contact properties associated with this list recipient in the "Data" array object in the response.
     *
     * Default value: `false`
     *
     */
    public bool $ShowExtraData;
    /**
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
    /**
     * When true, will retrieve statistics only for list recipients that have messages marked as Spam. When false, contacts with Spam messages will be excluded from the response.
     */
    public bool $Spam;
    /**
     * Selects the time zone for this user.
     */
    public string $TimeZone;
    /**
     * When true, will retrieve statistics only for list recipients that have unsubscribed from a list at least once. When false, contacts with unsubscribe events will be excluded from the response.
     */
    public bool $Unsubscribed;
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
            'Blocked' => is_bool($value) ? $this->Blocked = $value : parent::assignMember($name, $value),
            'Bounced' => is_bool($value) ? $this->Bounced = $value : parent::assignMember($name, $value),
            'Click' => is_bool($value) ? $this->Click = $value : parent::assignMember($name, $value),
            'Contact' => is_int($value) ? $this->Contact = $value : parent::assignMember($name, $value),
            'ContactsList' => is_int($value) ? $this->ContactsList = $value : parent::assignMember($name, $value),
            'IsExcludedFromCampaigns' => is_bool($value) ? $this->IsExcludedFromCampaigns = $value : parent::assignMember($name, $value),
            'IsUnsubscribed' => is_bool($value) ? $this->IsUnsubscribed = $value : parent::assignMember($name, $value),
            'LastActivityAt' => is_string($value) ? $this->LastActivityAt = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'MaxLastActivityAt' => is_string($value) ? $this->MaxLastActivityAt = $value : parent::assignMember($name, $value),
            'MaxUnsubscribedAt' => is_string($value) ? $this->MaxUnsubscribedAt = $value : parent::assignMember($name, $value),
            'MinLastActivityAt' => is_string($value) ? $this->MinLastActivityAt = $value : parent::assignMember($name, $value),
            'MinUnsubscribedAt' => is_string($value) ? $this->MinUnsubscribedAt = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Open' => is_bool($value) ? $this->Open = $value : parent::assignMember($name, $value),
            'Queued' => is_bool($value) ? $this->Queued = $value : parent::assignMember($name, $value),
            'Sent' => is_bool($value) ? $this->Sent = $value : parent::assignMember($name, $value),
            'ShowExtraData' => is_bool($value) ? $this->ShowExtraData = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'Spam' => is_bool($value) ? $this->Spam = $value : parent::assignMember($name, $value),
            'TimeZone' => is_string($value) ? $this->TimeZone = $value : parent::assignMember($name, $value),
            'Unsubscribed' => is_bool($value) ? $this->Unsubscribed = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
