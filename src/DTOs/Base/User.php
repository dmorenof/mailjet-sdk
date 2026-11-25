<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class User extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Access Control List. Indicates permissions attached to a resource.
     */
    public string $ACL;
    /**
     * This user's email address.
     */
    public string $Email;
    /**
     * Timestamp indicating when this user was last logged into.
     */
    public string $LastLoginAt;
    /**
     * Language settings for this user.
     *
     * Possible values:
     *
     * - `en_US`
     * - `en_GB`
     * - `en_EU`
     * - `de_DE`
     * - `fr_FR`
     * - `es_ES`
     * - `it_IT`
     * - `pt_PT`
     * - `pt_BR`
     * - `da_DK`
     * - `sv_SE`
     * - `nl_NL`
     *
     * Default value: `en_US`
     *
     */
    public string $Locale;
    /**
     * Time zone selected for this user.
     *
     * Default value: `etc/UTC`
     *
     */
    public string $Timezone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ACL' => is_string($value) ? $this->ACL = $value : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'LastLoginAt' => is_string($value) ? $this->LastLoginAt = $value : parent::assignMember($name, $value),
            'Locale' => is_string($value) ? $this->Locale = $value : parent::assignMember($name, $value),
            'Timezone' => is_string($value) ? $this->Timezone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
