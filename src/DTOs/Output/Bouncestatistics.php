<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Bouncestatistics extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp indicating when the bounce event occurred.
     */
    public string $BouncedAt;
    /**
     * Unique numeric ID of the campaign this bounce event is linked to.
     */
    public int $CampaignID;
    /**
     * Unique numeric ID of the contact this bounce event is linked to.
     */
    public int $ContactID;
    /**
     * Unique numeric ID of the bounced message.
     */
    public int $ID;
    /**
     * Indicates whether the contact was blocked as a result of this bounce or not.
     */
    public bool $IsBlocked;
    /**
     * Indicates whether this is a permanent (hard) bounce or not.
     */
    public bool $IsStatePermanent;
    /**
     * State of the message after the bounce event:
     *
     * - `1` = user unknown (recipient)
     * - `2` = mailbox inactive (recipient)
     * - `3` = quota exceeded (recipient)
     * - `4` = invalid domain (domain)
     * - `5` = no mail host (domain)
     * - `6` = relay/access denied (domain)
     * - `7` = sender blocked (spam)
     * - `8` = content blocked (spam)
     * - `9` = policy issue (spam)
     * - `10` = system issue (system)
     * - `11` = protocol issue (system)
     * - `12` = connection issue (system)
     * - `13` = greylisted (domain)
     * - `14` = preblocked (Mailjet)
     * - `15` = duplicate in campaign (Mailjet)
     * - `16` = spam preblocked (Mailjet)
     * - `17` = bad or empty template (content)
     * - `18` = error in template language (content)
     * - `19` = typofix (domain)
     * - `20` = blacklisted (recipient)
     * - `21` = spam reporter (recipient)
     *
     */
    public int $StateID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'BouncedAt' => is_string($value) ? $this->BouncedAt = $value : parent::assignMember($name, $value),
            'CampaignID' => is_int($value) ? $this->CampaignID = $value : parent::assignMember($name, $value),
            'ContactID' => is_int($value) ? $this->ContactID = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'IsBlocked' => is_bool($value) ? $this->IsBlocked = $value : parent::assignMember($name, $value),
            'IsStatePermanent' => is_bool($value) ? $this->IsStatePermanent = $value : parent::assignMember($name, $value),
            'StateID' => is_int($value) ? $this->StateID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
