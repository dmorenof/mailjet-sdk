<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Contactstatistics extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/contactstatistics [operationId: get_v3_contactstatistics] */
    /**
     * Contact Statistics List
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics, grouped by contact.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Contactstatistics $params = null): \MailjetSDK\Responses\V3\REST\Contactstatistics\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactstatistics::class)->get($params);
    }

    /** GET /v3/REST/contactstatistics/{contact_ID} [operationId: get_v3_contactstatistics_id] */
    /**
     * Contact Statistics by ID
     *
     * Retrieve a list of overall aggregated delivery and engagement statistics for a specific contact. To obtain a valid `contact_ID`, first call `GET /v3/REST/contact` to list your contacts.
     */
    public static function getByContactID(int $contact_ID): \MailjetSDK\Responses\V3\REST\Contactstatistics\ByContactID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Contactstatistics::class)->getByContactID($contact_ID);
    }
}
