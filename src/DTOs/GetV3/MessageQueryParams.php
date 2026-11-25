<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class MessageQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves only messages sent as part of the specified Campaign ID.
     */
    public int $Campaign;
    /**
     * Retrieves only messages sent to the specified Contact ID.
     */
    public int $Contact;
    /**
     * Retrieves only messages tagged with the specified `CustomID`.
     */
    public string $CustomID;
    /**
     * Retrieves only messages sent to the specified Destination ID (ID for a specific domain name).
     */
    public int $Destination;
    /**
     * Retrieves only messages sent after the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $FromTS;
    /**
     * Retrieves only messages of the specified type:
     *
     * - `1` - Transactional
     * - `2` - Marketing
     * - `3` - Unknown
     *
     */
    public int $FromType;
    /**
     * Limit the response to a select number of returned objects.
     *
     * Default value: `10`. Maximum value: `1000`
     *
     */
    public int $Limit;
    /**
     * Retrieves only non-delivered messages with the respective State ID. The MessageState ID explains why a message was not delivered successfully to the recipient:
     *
     * - `1` = user unknown (recipient)
     * - `2` = mailbox inactive (recipient)
     * - `3` = quota exceeded (recipient)
     * - `4` = invalid domain (domain)
     * - `5` = no mail host (domain)
     * - `6` = relay/access denied (domain)
     * - `7` = sender blocked (spam)
     * - `8` = content blocked (spam)
     * - `9` = policy issue (spam)
     * - `10` = system issue (system)
     * - `11` = protocol issue (system)
     * - `12` = connection issue (system)
     * - `13` = greylisted (domain)
     * - `14` = preblocked (Mailjet)
     * - `15` = duplicate in campaign (Mailjet)
     * - `16` = spam preblocked (Mailjet)
     * - `17` = bad or empty template (content)
     * - `18` = error in template language (content)
     * - `19` = typofix (domain)
     * - `20` = blacklisted (recipient)
     * - `21` = spam reporter (recipient)
     *
     */
    public int $MessageState;
    /**
     * Retrieves only messages with the specified status:
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
     * Retrieves only messages with the specified PlanSubscription ID.
     */
    public int $PlanSubscription;
    /**
     * Retrieves only messages sent using a sender address with the specified ID.
     */
    public int $SenderID;
    /**
     * When true, the recipient's email address will be displayed in the message object under `ContactAlt`.
     *
     * Default value: `false`
     *
     */
    public bool $ShowContactAlt;
    /**
     * When true, the `CustomID` attached to the message will be displayed in the message object under `CustomID`.
     *
     * Default value: `false`
     *
     */
    public bool $ShowCustomID;
    /**
     * When true, the subject of the message will be displayed under `Subject`.
     *
     * Default value: `false`
     *
     */
    public bool $ShowSubject;
    /**
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
    /**
     * Retrieves only messages sent before the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
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
            'Campaign' => is_int($value) ? $this->Campaign = $value : parent::assignMember($name, $value),
            'Contact' => is_int($value) ? $this->Contact = $value : parent::assignMember($name, $value),
            'CustomID' => is_string($value) ? $this->CustomID = $value : parent::assignMember($name, $value),
            'Destination' => is_int($value) ? $this->Destination = $value : parent::assignMember($name, $value),
            'FromTS' => is_string($value) ? $this->FromTS = $value : parent::assignMember($name, $value),
            'FromType' => is_int($value) ? $this->FromType = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'MessageState' => is_int($value) ? $this->MessageState = $value : parent::assignMember($name, $value),
            'MessageStatus' => is_int($value) ? $this->MessageStatus = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'PlanSubscription' => is_int($value) ? $this->PlanSubscription = $value : parent::assignMember($name, $value),
            'SenderID' => is_int($value) ? $this->SenderID = $value : parent::assignMember($name, $value),
            'ShowContactAlt' => is_bool($value) ? $this->ShowContactAlt = $value : parent::assignMember($name, $value),
            'ShowCustomID' => is_bool($value) ? $this->ShowCustomID = $value : parent::assignMember($name, $value),
            'ShowSubject' => is_bool($value) ? $this->ShowSubject = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'ToTS' => is_string($value) ? $this->ToTS = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
