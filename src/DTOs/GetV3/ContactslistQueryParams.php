<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ContactslistQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves only the contact list with the specified unique address created by Mailjet. This address which can be used only via Mailjet's SMTP server to reach all contacts in it. It is displayed in the `Address` property of the list. The full email will be `{Address}&#64;lists.mailjet.com`.
     */
    public string $Address;
    /**
     * Excludes the contact list with specified ID from the response.
     */
    public int $ExcludeID;
    /**
     * When true, will retrieve only deleted lists. When false, will retrieve lists that are not deleted.
     */
    public bool $IsDeleted;
    /**
     * Limit the response to a select number of returned objects.
     *
     * Default value: `10`. Maximum value: `1000`
     *
     */
    public int $Limit;
    /**
     * Retrieves only the list with the specified user-selected Name.
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
            'Address' => is_string($value) ? $this->Address = $value : parent::assignMember($name, $value),
            'ExcludeID' => is_int($value) ? $this->ExcludeID = $value : parent::assignMember($name, $value),
            'IsDeleted' => is_bool($value) ? $this->IsDeleted = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
