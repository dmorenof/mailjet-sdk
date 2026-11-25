<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ContactmetadataQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'Namespace' => 'Namespace_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'Namespace_' => 'Namespace',
    ];

    /**
     * Retrieves only properties with the respective data type:
     *
     * - `str` - string
     * - `int` - integer
     * - `float` - float / number
     * - `bool` - boolean
     * - `datetime` - datetime (Unix Timestamp or RFC 3339)
     *
     */
    public string $DataType;
    /**
     * Limit the response to a select number of returned objects.
     *
     * Default value: `10`. Maximum value: `1000`
     *
     */
    public int $Limit;
    /**
     * Retrieves only properties with the respective namespace:
     *
     * - `static` - Can keep only 1 value. Each change to the value of the property for a contact overwrites the previously selected value. The values are saved in a `contactdata` object.
     * - `historic` - Each change to the value of the property creates a record in a new `contacthistorydata` object, saving the property value and a timestamp of when it was submitted.
     *
     */
    public string $Namespace_;
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
            'DataType' => is_string($value) ? $this->DataType = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'Namespace' => is_string($value) ? $this->Namespace_ = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
