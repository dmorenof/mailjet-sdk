<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Campaigndraft extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Fraction of an AB Testing campaign as a percentage of the total emails. Zero indicates the remainder.
     */
    public float $AXFraction;
    /**
     * Name of the AB Testing fraction.
     */
    public string $AXFractionName;
    /**
     * An ID reference to the respective AXTesting object.
     */
    public \MailjetSDK\DTOs\Base\Campaigndraft\AXTestingDTO $AXTesting;
    /**
     * Data ID of the current content.
     */
    public int $Current;
    /**
     * Edit mode for the campaign draft.
     *
     * Possible values:
     *
     * - `tool2` - Passport drag-and-drop template editor
     * - `html2` - HTML editor in Passport
     * - `mjml` - MJML editor in Passport
     *
     */
    public string $EditMode;
    /**
     * Indicates whether the campaign draft is marked as Starred or not.
     */
    public bool $IsStarred;
    /**
     * Indicates whether the draft email contains a text version or not.
     */
    public bool $IsTextPartIncluded;
    /**
     * Reply-to email address for the campaign. Returned only if a reply-to email was specified.
     */
    public string $ReplyEmail;
    /**
     * Name of the sender, which will be visible to recipients.
     */
    public string $SenderName;
    /**
     * Unique numeric ID of the template the `CampaignDraft` was generated from, or as which it was last saved. Changing the template ID will not update the content of the CampaignDraft.
     */
    public int $TemplateID;
    /**
     * Internal title for this campaign draft.
     */
    public string $Title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AXFraction' => is_float($value) ? $this->AXFraction = $value : parent::assignMember($name, $value),
            'AXFractionName' => is_string($value) ? $this->AXFractionName = $value : parent::assignMember($name, $value),
            'Current' => is_int($value) ? $this->Current = $value : parent::assignMember($name, $value),
            'EditMode' => is_string($value) ? $this->EditMode = $value : parent::assignMember($name, $value),
            'IsStarred' => is_bool($value) ? $this->IsStarred = $value : parent::assignMember($name, $value),
            'IsTextPartIncluded' => is_bool($value) ? $this->IsTextPartIncluded = $value : parent::assignMember($name, $value),
            'ReplyEmail' => is_string($value) ? $this->ReplyEmail = $value : parent::assignMember($name, $value),
            'SenderName' => is_string($value) ? $this->SenderName = $value : parent::assignMember($name, $value),
            'TemplateID' => is_int($value) ? $this->TemplateID = $value : parent::assignMember($name, $value),
            'Title' => is_string($value) ? $this->Title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
