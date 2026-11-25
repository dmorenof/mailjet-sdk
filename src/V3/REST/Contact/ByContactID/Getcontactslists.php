<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Contact\ByContactID;

final class Getcontactslists extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/contact/{contact_ID}/getcontactslists [operationId: get_v3_contact_id_getcontactslists] */
    /**
     * Get Contact: Get Contact Lists
     *
     * Retrieve all contact lists for a specific contact. You will receive information on the status of the contact for each list. Information about lists deleted within the last 60 days will be returned as well, since those are soft-deleted and can be reinstated. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public static function get(int $contact_ID): \MailjetSDK\Responses\V3\REST\Contact\ByContactID\Getcontactslists\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contact\ByContactID\Getcontactslists::class)->get($contact_ID);
    }
}
