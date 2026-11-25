<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class CampaignstatisticsQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves statistics only for the campaigns with the specified AX Testing ID.
     */
    public int $AXTesting;
    /**
     * When true, will retrieve statistics only for campaigns that have blocked messages. When false, campaigns with blocked messages will be excluded from the response.
     */
    public bool $Blocked;
    /**
     * When true, will retrieve statistics only for campaigns that have bounced messages. When false, campaigns with bounced messages will be excluded from the response.
     */
    public bool $Bounced;
    /**
     * When true, will retrieve statistics only for campaigns that have messages with registered clicks. When false, campaigns with clicked messages will be excluded from the response.
     */
    public bool $Click;
    /**
     * Retrieves statistics only for campaigns sent to the specified contact list ID.
     */
    public int $ContactsList;
    /**
     * When true, will retrieve statistics only for campaigns that have deferred messages. When false, campaigns with deferred messages will be excluded from the response.
     */
    public bool $Deferred;
    /**
     * Retrieves statistics only for campaigns sent after the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $FromTS;
    /**
     * Retrieves campaign statistics only for a specific type of messages:
     *
     * - `1` - Transactional
     * - `2` - Marketing
     * - `3` - Unknown
     *
     */
    public int $FromType;
    /**
     * When true, the different test and winning versions of AB Tesing campaigns will be grouped together as one campaign. When false, each AB version will be displayed with separate statistics.
     */
    public bool $GroupAX;
    /**
     * When true, will retrieve statistics only for campaigns that have at least one hard-bounced message. When false, campaigns with hard-bounced messages will be excluded from the response.
     */
    public bool $Hardbounced;
    /**
     * When true, will retrieve statistics only for deleted campaigns. When false, stats for deleted campaigns will be excluded from the response.
     */
    public bool $IsDeleted;
    /**
     * When true, will retrieve statistics only for starred campaigns. When false, starred campaigns will be excluded from the response.
     */
    public bool $IsStarred;
    /**
     * Retrieves statistics only for campaigns, for which `LastActivityAt` (their last received email, open, click etc.) equals the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
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
     * Retrieves statistics only for campaigns, for which `LastActivityAt` (their last received email, open, click etc.) is before the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $MaxLastActivityAt;
    /**
     * Retrieves statistics only for campaigns, for which `LastActivityAt` (their last received email, open, click etc.) is after the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $MinLastActivityAt;
    /**
     * Retrieves statistics only for the campaign with the specified campaign draft ID.
     */
    public int $NewsLetter;
    /**
     * Retrieve a list of objects starting from a certain offset. Combine this query parameter with `Limit` to retrieve a specific section of the list of objects.
     *
     * Default value: `0`
     *
     */
    public int $Offset;
    /**
     * When true, will retrieve statistics only for campaigns that have messages with registered opens. When false, campaigns with opened messages will be excluded from the response.
     */
    public bool $Open;
    /**
     * When true, will retrieve statistics only for campaigns that have queued messages. When false, campaigns with queued messages will be excluded from the response.
     */
    public bool $Queued;
    /**
     * Retrieves statistics only for campaigns that have used the this segment (`contactfilter`) ID when specifying their recipients.
     */
    public int $Segmentation;
    /**
     * Retrieves statistics only for campaigns which used the specified sender ID.
     */
    public int $Sender;
    /**
     * When true, will retrieve statistics only for campaigns that have sent messages. When false, campaigns with sent messages will be excluded from the result.
     */
    public bool $Sent;
    /**
     * When true, the contact list name and segment name will be returned in the response, in the `ContactListName` and `SegmentName` properties, respectively.
     *
     * Default value: `false`
     *
     */
    public bool $ShowExtraData;
    /**
     * When true, will retrieve only statistics only for campaigns that have soft-bounced messages. When false, campaigns with soft-bounced messages will be excluded from the result.
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
     * When true, will retrieve statistics only for campaigns that have messages marked as Spam. When false, campaigns with Spam messages will be excluded from the response.
     */
    public bool $Spam;
    /**
     * Retrieves statistics only for campaigns with the specified subject line.
     */
    public string $Subject;
    /**
     * Retrieves statistics only for campaigns sent before the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $ToTS;
    /**
     * When true, will retrieve statistics only for campaigns that have unsubscribed from a list at least once. When false, campaigns with unsubscribe events will be excluded from the response.
     */
    public bool $Unsubscribed;
    /**
     * Retrieves statistics only for campaigns started by the specified automation workflow ID.
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
            'AXTesting' => is_int($value) ? $this->AXTesting = $value : parent::assignMember($name, $value),
            'Blocked' => is_bool($value) ? $this->Blocked = $value : parent::assignMember($name, $value),
            'Bounced' => is_bool($value) ? $this->Bounced = $value : parent::assignMember($name, $value),
            'Click' => is_bool($value) ? $this->Click = $value : parent::assignMember($name, $value),
            'ContactsList' => is_int($value) ? $this->ContactsList = $value : parent::assignMember($name, $value),
            'Deferred' => is_bool($value) ? $this->Deferred = $value : parent::assignMember($name, $value),
            'FromTS' => is_string($value) ? $this->FromTS = $value : parent::assignMember($name, $value),
            'FromType' => is_int($value) ? $this->FromType = $value : parent::assignMember($name, $value),
            'GroupAX' => is_bool($value) ? $this->GroupAX = $value : parent::assignMember($name, $value),
            'Hardbounced' => is_bool($value) ? $this->Hardbounced = $value : parent::assignMember($name, $value),
            'IsDeleted' => is_bool($value) ? $this->IsDeleted = $value : parent::assignMember($name, $value),
            'IsStarred' => is_bool($value) ? $this->IsStarred = $value : parent::assignMember($name, $value),
            'LastActivityAt' => is_string($value) ? $this->LastActivityAt = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'MaxLastActivityAt' => is_string($value) ? $this->MaxLastActivityAt = $value : parent::assignMember($name, $value),
            'MinLastActivityAt' => is_string($value) ? $this->MinLastActivityAt = $value : parent::assignMember($name, $value),
            'NewsLetter' => is_int($value) ? $this->NewsLetter = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Open' => is_bool($value) ? $this->Open = $value : parent::assignMember($name, $value),
            'Queued' => is_bool($value) ? $this->Queued = $value : parent::assignMember($name, $value),
            'Segmentation' => is_int($value) ? $this->Segmentation = $value : parent::assignMember($name, $value),
            'Sender' => is_int($value) ? $this->Sender = $value : parent::assignMember($name, $value),
            'Sent' => is_bool($value) ? $this->Sent = $value : parent::assignMember($name, $value),
            'ShowExtraData' => is_bool($value) ? $this->ShowExtraData = $value : parent::assignMember($name, $value),
            'Softbounced' => is_bool($value) ? $this->Softbounced = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'Spam' => is_bool($value) ? $this->Spam = $value : parent::assignMember($name, $value),
            'Subject' => is_string($value) ? $this->Subject = $value : parent::assignMember($name, $value),
            'ToTS' => is_string($value) ? $this->ToTS = $value : parent::assignMember($name, $value),
            'Unsubscribed' => is_bool($value) ? $this->Unsubscribed = $value : parent::assignMember($name, $value),
            'WorkflowID' => is_int($value) ? $this->WorkflowID = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
