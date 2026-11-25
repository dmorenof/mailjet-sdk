<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ContactslistsignupQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves only signup requests for a given contact ID.
     */
    public int $Contact;
    /**
     * Retrieves only signup requests to a given contact list ID.
     */
    public int $ContactsList;
    /**
     * Retrieves only signup requests for contacts with the specified domain. Required, if the `LocalPart` query parameter is used as well.
     */
    public string $Domain;
    /**
     * Retrieves only signup requests for the specified email address.
     */
    public string $Email;
    /**
     * Limit the response to a select number of returned objects.
     *
     * Default value: `10`. Maximum value: `1000`
     *
     */
    public int $Limit;
    /**
     * Retrieves only signup requests for emails with the specified local part. If this query parameter is used, the `Domain` query parameter is required as well.
     */
    public string $LocalPart;
    /**
     * Retrieves only signup requests, where the subscription confirmation was done earlier than the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public int $MaxConfirmAt;
    /**
     * Retrieves only signup requests, where the request was done before the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public int $MaxSignupAt;
    /**
     * Retrieves only signup requests, where the subscription confirmation was done after the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public int $MinConfirmAt;
    /**
     * Retrieves only signup requests, where the request was done after the specified timestamp. Both Unix timestamp (e.g. 1514764800) and RFC3339 (2018-01-01T00:00:00) formats are accepted.
     */
    public int $MinSignupAt;
    /**
     * Retrieve a list of objects starting from a certain offset. Combine this query parameter with `Limit` to retrieve a specific section of the list of objects.
     *
     * Default value: `0`
     *
     */
    public int $Offset;
    /**
     * Retrieves only signup requests, which were done from the specified IP address.
     */
    public string $SignupIp;
    /**
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
    /**
     * Retrieves only signup requests, which were done from the specified source type.
     */
    public string $Source;
    /**
     * Retrieves only signup requests done via the respective source ID. This would be the ID of the widget used for the request.
     */
    public int $SourceID;
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
            'Contact' => is_int($value) ? $this->Contact = $value : parent::assignMember($name, $value),
            'ContactsList' => is_int($value) ? $this->ContactsList = $value : parent::assignMember($name, $value),
            'Domain' => is_string($value) ? $this->Domain = $value : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'LocalPart' => is_string($value) ? $this->LocalPart = $value : parent::assignMember($name, $value),
            'MaxConfirmAt' => is_int($value) ? $this->MaxConfirmAt = $value : parent::assignMember($name, $value),
            'MaxSignupAt' => is_int($value) ? $this->MaxSignupAt = $value : parent::assignMember($name, $value),
            'MinConfirmAt' => is_int($value) ? $this->MinConfirmAt = $value : parent::assignMember($name, $value),
            'MinSignupAt' => is_int($value) ? $this->MinSignupAt = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'SignupIp' => is_string($value) ? $this->SignupIp = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'Source' => is_string($value) ? $this->Source = $value : parent::assignMember($name, $value),
            'SourceID' => is_int($value) ? $this->SourceID = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
