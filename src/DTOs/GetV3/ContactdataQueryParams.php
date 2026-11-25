<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ContactdataQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves a list of contact property values only for the contacts, which received emails from this Campaign ID.
     */
    public int $Campaign;
    /**
     * Retrieves a list of contact property values only for the contact with this email address.
     */
    public string $ContactEmail;
    /**
     * Retrieves a list of contact property values only for the contacts that are part of this contact list ID.
     */
    public int $ContactsList;
    /**
     * Only retrieves the information from the contact properties with the specified names. Empty values will be returned as well. Multiple properties can be specified by separating them with commas.
     */
    public string $Fields;
    /**
     * Retrieves a list of contact property values only for the contacts, whose last activity was at the specified time. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
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
            'Campaign' => is_int($value) ? $this->Campaign = $value : parent::assignMember($name, $value),
            'ContactEmail' => is_string($value) ? $this->ContactEmail = $value : parent::assignMember($name, $value),
            'ContactsList' => is_int($value) ? $this->ContactsList = $value : parent::assignMember($name, $value),
            'Fields' => is_string($value) ? $this->Fields = $value : parent::assignMember($name, $value),
            'LastActivityAt' => is_string($value) ? $this->LastActivityAt = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
