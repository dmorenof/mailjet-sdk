<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ApikeyQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves the selected API Key.
     */
    public string $APIKey;
    /**
     * When true, only active API Keys will be retrieved. When false, active API Keys will be excluded from the result.
     */
    public bool $IsActive;
    /**
     * When true, only the Primary API Key will be retrieved. When false, the Primary API Key will be excluded from the result.
     */
    public bool $IsMaster;
    /**
     * Limit the response to a select number of returned objects.
     *
     * Default value: `10`. Maximum value: `1000`
     *
     */
    public int $Limit;
    /**
     * Retrieves the API Key with the specified name.
     */
    public string $Name;
    /**
     * Retrieve a list of objects starting from a certain offset. Combine this query parameter with `Limit` to retrieve a specific section of the list of objects.
     *
     * Default value: `0`
     *
     */
    public int $Offset;
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
            'APIKey' => is_string($value) ? $this->APIKey = $value : parent::assignMember($name, $value),
            'IsActive' => is_bool($value) ? $this->IsActive = $value : parent::assignMember($name, $value),
            'IsMaster' => is_bool($value) ? $this->IsMaster = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
