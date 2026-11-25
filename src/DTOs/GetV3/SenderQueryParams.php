<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class SenderQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves only senders linked to this DNS ID.
     */
    public int $DnsID;
    /**
     * Retrieves only senders with the specified domain in their Email.
     */
    public string $Domain;
    /**
     * Retrieves only senders with the specified Email address.
     */
    public string $Email;
    /**
     * When true, will retrieve only domain sender objects. When false, domain senders are excluded from the response.
     */
    public bool $IsDomainSender;
    /**
     * Limit the response to a select number of returned objects.
     *
     * Default value: `10`. Maximum value: `1000`
     *
     */
    public int $Limit;
    /**
     * Retrieves only senders with the specified local part in their Email address. Since the local part of domains is an asterisk, you can use this query parameter with * as its value to return only sender domains.
     */
    public string $LocalPart;
    /**
     * Retrieve a list of objects starting from a certain offset. Combine this query parameter with `Limit` to retrieve a specific section of the list of objects.
     *
     * Default value: `0`
     *
     */
    public int $Offset;
    /**
     * When true, will retrieve deleted sender objects along with non-deleted ones. When false, deleted senders will be excluded from the response.
     *
     * Default value: `false`
     *
     */
    public bool $ShowDeleted;
    /**
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
    /**
     * Retrieves only senders with the specified status.
     *
     * Possible values:
     *
     * - `Inactive`
     * - `Active`
     * - `Deleted`
     *
     */
    public string $Status;
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
            'DnsID' => is_int($value) ? $this->DnsID = $value : parent::assignMember($name, $value),
            'Domain' => is_string($value) ? $this->Domain = $value : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'IsDomainSender' => is_bool($value) ? $this->IsDomainSender = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'LocalPart' => is_string($value) ? $this->LocalPart = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'ShowDeleted' => is_bool($value) ? $this->ShowDeleted = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
