<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Myprofile extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The "City" part of your organization's address.
     */
    public string $AddressCity;
    /**
     * The "Country" part of your organization's address.
     */
    public string $AddressCountry;
    /**
     * The "Postal Code" (or ZIP code) part of your organization's address.
     */
    public string $AddressPostalCode;
    /**
     * The "State" part of your organization's address. Applicable only for addresses within the USA.
     */
    public string $AddressState;
    /**
     * The "Street" part of your organization's address.
     */
    public string $AddressStreet;
    /**
     * Email address used for billing.
     */
    public string $BillingEmail;
    /**
     * Timestamp for the user's birthday.
     */
    public string $BirthdayAt;
    /**
     * The name of your company.
     */
    public string $CompanyName;
    /**
     * The number of employees in the company.
     */
    public string $CompanyNumOfEmployees;
    /**
     * The company phone number. The proper format is a 2-letter country code followed by the phone number, separated by a vertical bar - e.g. `FR|123456789` or `US|123123123`.
     */
    public string $ContactPhone;
    /**
     * Estimated volume of email messages this user will send.
     */
    public int $EstimatedVolume;
    /**
     * Allowed features.
     */
    public string $Features;
    /**
     * The first name of the contact person.
     */
    public string $Firstname;
    /**
     * Numeric ID for the industry selected.
     */
    public int $Industry;
    /**
     * The contact person's position within the organization.
     */
    public string $JobTitle;
    /**
     * The last name of the contact person.
     */
    public string $Lastname;
    /**
     * The VAT number supplied by the user.
     */
    public string $VATNumber;
    /**
     * The organization's website.
     */
    public string $Website;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AddressCity' => is_string($value) ? $this->AddressCity = $value : parent::assignMember($name, $value),
            'AddressCountry' => is_string($value) ? $this->AddressCountry = $value : parent::assignMember($name, $value),
            'AddressPostalCode' => is_string($value) ? $this->AddressPostalCode = $value : parent::assignMember($name, $value),
            'AddressState' => is_string($value) ? $this->AddressState = $value : parent::assignMember($name, $value),
            'AddressStreet' => is_string($value) ? $this->AddressStreet = $value : parent::assignMember($name, $value),
            'BillingEmail' => is_string($value) ? $this->BillingEmail = $value : parent::assignMember($name, $value),
            'BirthdayAt' => is_string($value) ? $this->BirthdayAt = $value : parent::assignMember($name, $value),
            'CompanyName' => is_string($value) ? $this->CompanyName = $value : parent::assignMember($name, $value),
            'CompanyNumOfEmployees' => is_string($value) ? $this->CompanyNumOfEmployees = $value : parent::assignMember($name, $value),
            'ContactPhone' => is_string($value) ? $this->ContactPhone = $value : parent::assignMember($name, $value),
            'EstimatedVolume' => is_int($value) ? $this->EstimatedVolume = $value : parent::assignMember($name, $value),
            'Features' => is_string($value) ? $this->Features = $value : parent::assignMember($name, $value),
            'Firstname' => is_string($value) ? $this->Firstname = $value : parent::assignMember($name, $value),
            'Industry' => is_int($value) ? $this->Industry = $value : parent::assignMember($name, $value),
            'JobTitle' => is_string($value) ? $this->JobTitle = $value : parent::assignMember($name, $value),
            'Lastname' => is_string($value) ? $this->Lastname = $value : parent::assignMember($name, $value),
            'VATNumber' => is_string($value) ? $this->VATNumber = $value : parent::assignMember($name, $value),
            'Website' => is_string($value) ? $this->Website = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
