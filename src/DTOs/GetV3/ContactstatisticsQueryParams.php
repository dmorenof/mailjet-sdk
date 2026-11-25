<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ContactstatisticsQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When true, will retrieve statistics only for contacts that have at least one blocked message. When false, contacts with blocked messages will be excluded from the response.
     */
    public bool $Blocked;
    /**
     * When true, will retrieve statistics only for contacts that have at least one bounced message. When false, contacts with bounced messages will be excluded from the response.
     */
    public bool $Bounced;
    /**
     * When true, will retrieve statistics only for contacts that have at least one message with a registered click. When false, contacts with clicked messages will be excluded from the response.
     */
    public bool $Click;
    /**
     * When true, will retrieve statistics only for contacts that have at least one deferred message. When false, contacts with deferred messages will be excluded from the response.
     */
    public bool $Deferred;
    /**
     * When true, will retrieve statistics only for contacts that have at least one hard-bounced message. When false, contacts with hard-bounced messages will be excluded from the response.
     */
    public bool $Hardbounced;
    /**
     * Retrieves statistics only for contacts, for which `LastActivityAt` (their last received email, open, click etc.) equals the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
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
     * Retrieves statistics only for contacts, for which `LastActivityAt` (their last received email, open, click etc.) is before the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $MaxLastActivityAt;
    /**
     * Retrieves statistics only for contacts, for which `LastActivityAt` (their last received email, open, click etc.) is after the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $MinLastActivityAt;
    /**
     * Retrieve a list of objects starting from a certain offset. Combine this query parameter with `Limit` to retrieve a specific section of the list of objects.
     *
     * Default value: `0`
     *
     */
    public int $Offset;
    /**
     * When true, will retrieve statistics only for contacts that have messages with registered opens. When false, contacts with opened messages will be excluded from the response.
     */
    public bool $Open;
    /**
     * When true, will retrieve statistics only for contacts that have queued messages. When false, contacts with queued messages will be excluded from the response.
     */
    public bool $Queued;
    /**
     * When true, will reload all data from the database.
     *
     * > Note: Deprecated for accounts created after April 5th, 2018.
     *
     *
     * @deprecated
     */
    public bool $Recalculate;
    /**
     * When true, will retrieve statistics only for contacts that have sent messages. When false, contacts with sent messages will be excluded from the response.
     */
    public bool $Sent;
    /**
     * When true, will retrieve statistics only for contacts that have soft-bounced messages. When false, contacts with soft-bounced messages will be excluded from the response.
     */
    public bool $Softbounced;
    /**
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
    /**
     * When true, will retrieve statistics for only contacts that have messages marked as Spam. When false, contacts with Spam messages will be excluded from the response.
     */
    public bool $Spam;
    /**
     * When true, will retrieve statistics only for contacts that have unsubscribed from a list at least once. When false, contacts with unsubscribe events will be excluded from the response.
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
            'Deferred' => is_bool($value) ? $this->Deferred = $value : parent::assignMember($name, $value),
            'Hardbounced' => is_bool($value) ? $this->Hardbounced = $value : parent::assignMember($name, $value),
            'LastActivityAt' => is_string($value) ? $this->LastActivityAt = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'MaxLastActivityAt' => is_string($value) ? $this->MaxLastActivityAt = $value : parent::assignMember($name, $value),
            'MinLastActivityAt' => is_string($value) ? $this->MinLastActivityAt = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Open' => is_bool($value) ? $this->Open = $value : parent::assignMember($name, $value),
            'Queued' => is_bool($value) ? $this->Queued = $value : parent::assignMember($name, $value),
            'Recalculate' => is_bool($value) ? $this->Recalculate = $value : parent::assignMember($name, $value),
            'Sent' => is_bool($value) ? $this->Sent = $value : parent::assignMember($name, $value),
            'Softbounced' => is_bool($value) ? $this->Softbounced = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'Spam' => is_bool($value) ? $this->Spam = $value : parent::assignMember($name, $value),
            'Unsubscribed' => is_bool($value) ? $this->Unsubscribed = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
