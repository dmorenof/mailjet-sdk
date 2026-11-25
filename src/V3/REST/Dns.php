<?php

declare(strict_types=1);

namespace MailjetSDK\V3\REST;

final class Dns extends \MailjetSDK\MailjetAPISDK
{
    /** GET /v3/REST/dns [operationId: get_v3_dns] */
    /**
     * DNS List
     *
     * Retrieve the SPF and DKIM settings for all sender domains on this API Key. The information will help you configure your SPF and DKIM settings on the respective domain, before running a DNS check with `/dns/{dns_id}/check` to validate it and complete the SPF and DKIM authentication.
     */
    public static function get(?\MailjetSDK\GetParams\V3\REST\Dns $params = null): \MailjetSDK\Responses\V3\REST\Dns\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Dns::class)->get($params);
    }

    /** GET /v3/REST/dns/{dns_ID} [operationId: get_v3_dns_id] */
    /**
     * DNS by ID
     *
     * Retrieve the SPF and DKIM settings for a specific sender domain on this API Key. The information will help you configure your SPF and DKIM settings on the respective domain, before running a DNS check with `/dns/{dns_id}/check` to validate it. To obtain a valid `dns_ID`, first call `GET /v3/REST/dns` to list your domains.
     */
    public static function getByDnsID(int $dns_ID): \MailjetSDK\Responses\V3\REST\Dns\ByDnsID\Get
    {
        return self::client()->resource(\MailjetSDK\Resources\V3\REST\Dns::class)->getByDnsID($dns_ID);
    }
}
