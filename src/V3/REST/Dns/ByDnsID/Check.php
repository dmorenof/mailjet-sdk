<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST\Dns\ByDnsID;

final class Check extends \MailjetSDK\MailjetAPISDK
{
    /** POST /v3/REST/dns/{dns_ID}/check [operationId: post_v3_dns_id_check] */
    /**
     * DNS: Check
     *
     * Perform a DNS validation of a sender domain. The Mailjet API will check for a TXT record in the domain's DNS zone file. [More information](/docs/email-api/senders-domains/sender-validation) To obtain a valid `dns_ID`, first call `GET /v3/REST/dns` to list your domains.
     */
    public static function post(int $dns_ID): \MailjetSDK\Responses\V3\REST\Dns\ByDnsID\Check\Post
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Dns\ByDnsID\Check::class)->post($dns_ID);
    }

}
