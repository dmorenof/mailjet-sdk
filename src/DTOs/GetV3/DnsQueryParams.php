<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class DnsQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When true, will retrieve only DNS records, where a validation check was initiated and is in progress. When false, DNS records where a check is in progress will be excluded from the response.
     */
    public bool $IsCheckInProgress;
    /**
     * Retrieves DNS records where IsSenderIdentified matches the specified value.
     */
    public bool $IsSenderIdentified;
    /**
     * Retrieves only DNS records where a Yahoo Feedback loop has been setup. Contact the Mailjet Support team to set up the feedback loop.
     */
    public bool $IsYahooFBL;
    /**
     * Limit the response to a select number of returned objects.
     *
     * Default value: `10`. Maximum value: `1000`
     *
     */
    public int $Limit;
    /**
     * Retrieves only DNS records where the last check was performed before this timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $MaxLastCheckAt;
    /**
     * Retrieves only DNS records where the last check was performed after this timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public string $MinLastCheckAt;
    /**
     * Retrieve a list of objects starting from a certain offset. Combine this query parameter with `Limit` to retrieve a specific section of the list of objects.
     *
     * Default value: `0`
     *
     */
    public int $Offset;
    /**
     * Retrieves only DNS records where the last domain SPF configuration check resulted in the specified status.
     *
     * Possible values:
     *
     * - `OK`
     * - `Error`
     * - `Not checked`
     * - `Not found`
     *
     */
    public string $SPFStatus;
    /**
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
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
            'IsCheckInProgress' => is_bool($value) ? $this->IsCheckInProgress = $value : parent::assignMember($name, $value),
            'IsSenderIdentified' => is_bool($value) ? $this->IsSenderIdentified = $value : parent::assignMember($name, $value),
            'IsYahooFBL' => is_bool($value) ? $this->IsYahooFBL = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'MaxLastCheckAt' => is_string($value) ? $this->MaxLastCheckAt = $value : parent::assignMember($name, $value),
            'MinLastCheckAt' => is_string($value) ? $this->MinLastCheckAt = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'SPFStatus' => is_string($value) ? $this->SPFStatus = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
