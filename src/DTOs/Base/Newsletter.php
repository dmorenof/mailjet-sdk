<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Newsletter extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Fraction of an AB Testing newsletter as a percentage of the total emails. Zero indicates the remainder.
     */
    public float $AXFraction;
    /**
     * Name of the AB Testing fraction.
     */
    public string $AXFractionName;
    /**
     * An ID reference to the respective AXTesting object.
     */
    public \MailjetSDK\DTOs\Base\Newsletter\AXTestingDTO $AXTesting;
    /**
     * The callback URL used for this newsletter.
     */
    public string $Callback;
    /**
     * Edit mode for newsletter.
     *
     *  - `tool` - Legacy drag-and-drop template editor
     *  - `html` - Legacy HTML editor
     *
     *  Default value: `tool`
     *
     */
    public string $EditMode;
    /**
     * Edit type.
     *
     * Default value: `full`
     *
     */
    public string $EditType;
    /**
     * Specifies the footer type that will be generated - either the `default` one, or `none`.
     *
     * Default value: `default`
     *
     */
    public string $Footer;
    /**
     * The address that will be used in the footer.
     */
    public string $FooterAddress;
    /**
     * Specifies what type of footer is used, based on selections available in the legacy drag-and-drop template builder.
     */
    public int $FooterWYSIWYGType;
    /**
     * Indicates the URL link to where the file used in the header is located, if you have added one.
     */
    public string $HeaderFilename;
    /**
     * Indicates the URL link used in the header.
     */
    public string $HeaderLink;
    /**
     * The text content in the header.
     */
    public string $HeaderText;
    /**
     * URL used in header.
     */
    public string $HeaderUrl;
    /**
     * The IP address used to create the newsletter.
     */
    public string $Ip;
    /**
     * Indicates whether the newsletter is marked as Starred or not.
     */
    public bool $IsStarred;
    /**
     * Indicates whether the newsletter email contains a plain text version or not.
     */
    public bool $IsTextPartIncluded;
    /**
     * Type of permalink that should be added to the newsletter. The default permalink allows recipients to view an online version of the newsletter template online.
     *
     * Default value: `default`
     *
     */
    public string $Permalink;
    /**
     * Host for the permalink.
     */
    public string $PermalinkHost;
    /**
     * Deprecated property.
     */
    public int $PermalinkWYSIWYGType;
    /**
     * Deprecated property.
     */
    public int $PolitenessMode;
    /**
     * Reply-to email address for the campaign.
     */
    public string $ReplyEmail;
    /**
     * Name of the sender, which will be visible to recipients.
     */
    public string $SenderName;
    /**
     * Status of the newsletter. Only newsletters in status newsletter or `Programmed` can be scheduled and sent out via `/newsletter/{newsletter_id}/schedule` or  `/newsletter/{newsletter_id}/send`.
     *
     * - `-3` - AXCancelled
     * - `-2`- Deleted
     * - `-1` - Archived
     * - `0` - Draft
     * - `1` - Programmed (scheduled)
     * - `2` - Sent
     * - `3` - AXTested (AB Testing versions sent, but winning version not selected yet)
     * - `4` - AXSelected (AB Testing winning version selected and sent)
     *
     */
    public int $Status;
    /**
     * ID reference to the template the newsletter was generated from, or as which it was last saved. Changing the template ID will not update the content of the newsletter.
     */
    public int $TemplateID;
    /**
     * Email address used as a sender for test emails of this newsletter.
     */
    public string $TestAddress;
    /**
     * Internal title for this newsletter.
     */
    public string $Title;
    /**
     * URL where an online version of the newsletter can be found.
     */
    public string $Url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AXFraction' => is_float($value) ? $this->AXFraction = $value : parent::assignMember($name, $value),
            'AXFractionName' => is_string($value) ? $this->AXFractionName = $value : parent::assignMember($name, $value),
            'Callback' => is_string($value) ? $this->Callback = $value : parent::assignMember($name, $value),
            'EditMode' => is_string($value) ? $this->EditMode = $value : parent::assignMember($name, $value),
            'EditType' => is_string($value) ? $this->EditType = $value : parent::assignMember($name, $value),
            'Footer' => is_string($value) ? $this->Footer = $value : parent::assignMember($name, $value),
            'FooterAddress' => is_string($value) ? $this->FooterAddress = $value : parent::assignMember($name, $value),
            'FooterWYSIWYGType' => is_int($value) ? $this->FooterWYSIWYGType = $value : parent::assignMember($name, $value),
            'HeaderFilename' => is_string($value) ? $this->HeaderFilename = $value : parent::assignMember($name, $value),
            'HeaderLink' => is_string($value) ? $this->HeaderLink = $value : parent::assignMember($name, $value),
            'HeaderText' => is_string($value) ? $this->HeaderText = $value : parent::assignMember($name, $value),
            'HeaderUrl' => is_string($value) ? $this->HeaderUrl = $value : parent::assignMember($name, $value),
            'Ip' => is_string($value) ? $this->Ip = $value : parent::assignMember($name, $value),
            'IsStarred' => is_bool($value) ? $this->IsStarred = $value : parent::assignMember($name, $value),
            'IsTextPartIncluded' => is_bool($value) ? $this->IsTextPartIncluded = $value : parent::assignMember($name, $value),
            'Permalink' => is_string($value) ? $this->Permalink = $value : parent::assignMember($name, $value),
            'PermalinkHost' => is_string($value) ? $this->PermalinkHost = $value : parent::assignMember($name, $value),
            'PermalinkWYSIWYGType' => is_int($value) ? $this->PermalinkWYSIWYGType = $value : parent::assignMember($name, $value),
            'PolitenessMode' => is_int($value) ? $this->PolitenessMode = $value : parent::assignMember($name, $value),
            'ReplyEmail' => is_string($value) ? $this->ReplyEmail = $value : parent::assignMember($name, $value),
            'SenderName' => is_string($value) ? $this->SenderName = $value : parent::assignMember($name, $value),
            'Status' => is_int($value) ? $this->Status = $value : parent::assignMember($name, $value),
            'TemplateID' => is_int($value) ? $this->TemplateID = $value : parent::assignMember($name, $value),
            'TestAddress' => is_string($value) ? $this->TestAddress = $value : parent::assignMember($name, $value),
            'Title' => is_string($value) ? $this->Title = $value : parent::assignMember($name, $value),
            'Url' => is_string($value) ? $this->Url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
