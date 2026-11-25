<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class StatisticsRecipientEspQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves statistics only for the specified campaign ID.
     */
    public int $CampaignID;
    /**
     * Retrieves statistics for the given ESPs only. Multiple ESPs can be separated with commas. The list of recognized ESPs you can enter as values is:
     *
     * - `gmail`
     * - `gsuite (gmail for pro)`
     * - `orange`
     * - `yahoo`
     * - `microsoft`
     * - `free`
     * - `sfr`
     * - `laposte`
     * - `aol`
     * - `comcast`
     * - `gmx`
     * - `web.de`
     * - `t-online`
     * - `freenet`
     * - `movistar`
     * - `vodafone`
     * - `jazztel`
     * - `ono`
     * - `euskaltel`
     * - `mundo-r`
     * - `sapo`
     * - `zoho`
     * - `ovh`
     * - `kpn`
     * - `telenet`
     * - `swisscom`
     * - `bnet`
     * - `messagelabs (symantec)`
     * - `mailjet`
     * - `btinternet`
     * - `icloud`
     * - `mail.ru`
     * - `ziggo`
     * - `wp.pl`
     * - `libero`
     * - `seznam`
     * - `bluewin`
     * - `bbox`
     * - `qq.com`
     * - `skynet`
     * - `o2`
     * - `gandi`
     * - `yandex`
     * - `ionos`
     *
     * When entered, the ESP names should be URL-encoded.
     *
     */
    public int $ESP_Name;
    /**
     * Limit the response to a select number of returned objects.
     *
     * Default value: `10`. Maximum value: `1000`
     *
     */
    public int $Limit;
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
            'CampaignID' => is_int($value) ? $this->CampaignID = $value : parent::assignMember($name, $value),
            'ESP_Name' => is_int($value) ? $this->ESP_Name = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
