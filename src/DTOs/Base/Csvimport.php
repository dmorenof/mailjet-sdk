<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Csvimport extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Maximum number of errors allowed during the processing of the contacts, before the import job is aborted.
     */
    public int $ErrTreshold;
    /**
     * A string with a JSON structure describing the import options in effect. Used to specify date format, when `datetime` contact properties are included in the CSV content. See our [API Guide](/docs/email-api/contact-management/manage-contacts-csv) for detailed information.
     */
    public string $ImportOptions;
    /**
     * Action to be performed on the contacts in the CSV data for this list:
     *
     * - `addforce` - Add the contacts to this list and subscribe all of them. If the contact is already present in the list as unsubscribed, it will be forcibly subscribed once again.
     * - `addnoforce` - Add the contacts to this list and subscribe them to it. If the contact is already present, it will retain its subscription status, i.e. if a contact is part of the list, but unsubscribed, it will not be forcibly subscribed again.
     * - `remove` - Remove the contacts from this list.
     * - `unsub` - Unsubscribe the contacts from this list.
     * - `excludemarketing` - Add the contacts to the campaign exclusion list (they will be blocked from receiving marketing campaigns).
     * - `includemarketing` - Remove the contacts from the campaign exlcusion list (they will be allowed to receive marketing campaigns).
     *
     */
    public string $Method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ErrTreshold' => is_int($value) ? $this->ErrTreshold = $value : parent::assignMember($name, $value),
            'ImportOptions' => is_string($value) ? $this->ImportOptions = $value : parent::assignMember($name, $value),
            'Method' => is_string($value) ? $this->Method = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
