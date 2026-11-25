<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\NewContactslistManageManyContacts;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MailjetSDK\DTOs\NewContactslistManageManyContacts\ContactsDTO> */
final class ContactsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\NewContactslistManageManyContacts\ContactsDTO::class;
}
