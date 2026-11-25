<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Contact\ByContactID;

final class Managecontactslists extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/contact/{contact_ID}/managecontactslists [operationId: post_v3_contact_id_managecontactslists] */
    /**
     * Contact: Manage Contact Lists
     *
     * Manage the presence and subscription status of a contact for multiple contact lists. Select the contact lists, as well as the desired action to be performed on each one - add, remove or unsub. The contact should already be present in the global contact list. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public static function post(int $contact_ID, \MailjetSDK\DTOs\NewContactManagecontactslists $payload): \MailjetSDK\Responses\V3\REST\Contact\ByContactID\Managecontactslists\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contact\ByContactID\Managecontactslists::class)->post($contact_ID, $payload);
    }

}
