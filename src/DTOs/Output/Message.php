<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Message extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp indicating when the message arrived in the recipient's mailbox.
     */
    public string $ArrivedAt;
    /**
     * Number of attachments detected for this message.
     */
    public int $AttachmentCount;
    /**
     * Number of attempts made to deliver this message.
     */
    public int $AttemptCount;
    /**
     * Unique numeric ID for the campaign this message is part of.
     */
    public int $CampaignID;
    /**
     * The email address of the contact, to which the message was sent. Displayed only when ShowContactAlt=true.
     */
    public string $ContactAlt;
    /**
     * Unique numeric ID for the contact, to which the message was sent.
     */
    public int $ContactID;
    /**
     * Delay between the message being processed and it being delivered (in milliseconds).
     */
    public float $Delay;
    /**
     * Unique numeric ID of the recipient email's domain.
     */
    public int $DestinationID;
    /**
     * Time spent processing the text of the message (in milliseconds).
     */
    public int $FilterTime;
    /**
     * Unique numeric ID of this message.
     */
    public int $ID;
    /**
     * Indicates whether clicks are tracked for this message or not.
     */
    public bool $IsClickTracked;
    /**
     * Indicates whether the message includes any HTML content (Html-part!=null) or not.
     */
    public bool $IsHTMLPartIncluded;
    /**
     * Indicates whether opens are tracked for this message or not.
     */
    public bool $IsOpenTracked;
    /**
     * Indicates whether the message includes a plain text part (`Text-part`!=`null`) or not.
     */
    public bool $IsTextPartIncluded;
    /**
     * Indicates whether unsubscriptions are tracked for this message or not.
     */
    public bool $IsUnsubTracked;
    /**
     * Indicates the message size (in bytes).
     */
    public int $MessageSize;
    /**
     * Unique numeric ID of the sender email address.
     */
    public int $SenderID;
    /**
     * Matched SpamAssassin rules.
     */
    public string $SpamassRules;
    /**
     * SpamAssassin score for this message.
     */
    public float $SpamassassinScore;
    /**
     * Unique numeric ID explaining why the message was not delivered successfully to the recipient. Only returned if the message was not delivered successfully.
     *
     * Possible values:
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
    /**
     * Indicates whether the current state of the message is permanent (i.e. cannot be changed anymore) or not.
     */
    public bool $StatePermanent;
    /**
     * Current message status.
     *
     * Possible values:
     *
     * - `unknown`
     * - `queued`
     * - `sent`
     * - `opened`
     * - `clicked`
     * - `bounce`
     * - `spam`
     * - `unsub`
     * - `blocked`
     * - `hardbounced`
     * - `softbounced`
     * - `deferred`
     *
     */
    public string $Status;
    /**
     * The subject line for this message. Displayed only when ShowSubject=true.
     */
    public string $Subject;
    /**
     * Unique 128-bit ID for this message.
     *
     * > Note: Returns values only for accounts created after April 5th, 2018.
     *
     */
    public string $UUID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ArrivedAt' => is_string($value) ? $this->ArrivedAt = $value : parent::assignMember($name, $value),
            'AttachmentCount' => is_int($value) ? $this->AttachmentCount = $value : parent::assignMember($name, $value),
            'AttemptCount' => is_int($value) ? $this->AttemptCount = $value : parent::assignMember($name, $value),
            'CampaignID' => is_int($value) ? $this->CampaignID = $value : parent::assignMember($name, $value),
            'ContactAlt' => is_string($value) ? $this->ContactAlt = $value : parent::assignMember($name, $value),
            'ContactID' => is_int($value) ? $this->ContactID = $value : parent::assignMember($name, $value),
            'Delay' => is_float($value) ? $this->Delay = $value : parent::assignMember($name, $value),
            'DestinationID' => is_int($value) ? $this->DestinationID = $value : parent::assignMember($name, $value),
            'FilterTime' => is_int($value) ? $this->FilterTime = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'IsClickTracked' => is_bool($value) ? $this->IsClickTracked = $value : parent::assignMember($name, $value),
            'IsHTMLPartIncluded' => is_bool($value) ? $this->IsHTMLPartIncluded = $value : parent::assignMember($name, $value),
            'IsOpenTracked' => is_bool($value) ? $this->IsOpenTracked = $value : parent::assignMember($name, $value),
            'IsTextPartIncluded' => is_bool($value) ? $this->IsTextPartIncluded = $value : parent::assignMember($name, $value),
            'IsUnsubTracked' => is_bool($value) ? $this->IsUnsubTracked = $value : parent::assignMember($name, $value),
            'MessageSize' => is_int($value) ? $this->MessageSize = $value : parent::assignMember($name, $value),
            'SenderID' => is_int($value) ? $this->SenderID = $value : parent::assignMember($name, $value),
            'SpamassRules' => is_string($value) ? $this->SpamassRules = $value : parent::assignMember($name, $value),
            'SpamassassinScore' => is_float($value) ? $this->SpamassassinScore = $value : parent::assignMember($name, $value),
            'StateID' => is_int($value) ? $this->StateID = $value : parent::assignMember($name, $value),
            'StatePermanent' => is_bool($value) ? $this->StatePermanent = $value : parent::assignMember($name, $value),
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            'Subject' => is_string($value) ? $this->Subject = $value : parent::assignMember($name, $value),
            'UUID' => is_string($value) ? $this->UUID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
