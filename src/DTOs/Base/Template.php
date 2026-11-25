<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Template extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The name of the template author.
     */
    public string $Author;
    /**
     * An array containing a list of strings indicating the categories, to which the template is associated. Accepted values are `full`, `basic`, `newsletter`, `e-commerce`, `events`, `travel`, `sports`, `welcome`, `contact-property-update`, `support`, `invoice`, `anniversary`, `account`, `activation`.
     */
    public string $Categories;
    /**
     * The Copyright message.
     */
    public string $Copyright;
    /**
     * Free text used as a description for this template.
     */
    public string $Description;
    /**
     * Edit mode for this template:
     *
     * - `1` - Passport drag-and-drop builder
     * - `2` - Passport HTML builder
     * - `3` - Passport Saved Section (snippet) builder
     * - `4` - Passport MJML builder
     *
     * When a template is created through the API, the value has to be set by the caller - there is no fallback. Templates created in the Mailjet app are always `1` - Passport drag-and-drop builder.
     *
     */
    public int $EditMode;
    /**
     * Indicates whether this campaign is marked as starred or not.
     *
     * Default value: `false`
     *
     */
    public bool $IsStarred;
    /**
     * Indicates whether the generation of a text version of the template will be enabled or not.
     *
     * Default value: `false`
     *
     */
    public bool $IsTextPartGenerationEnabled;
    /**
     * The locale for this template (AnsiString).
     *
     * Default value: `en_US`
     *
     */
    public string $Locale;
    /**
     * Internal name for this template.
     */
    public string $Name;
    /**
     * Indicates the type of the template owner.
     *
     * Possible values:
     *
     * - `apikey` - Templates and their content can be retrieved, edited and used only by the API Key they were created from.
     * - `user` - Templates created by the Primary API Key. Templates and their content can be retrieved by the Primary API Key, as well as all subaccount API Keys. However, they can be edited and used only by the Primary API Key.
     * - `global` - Generic templates created by Mailjet visible in the Passport Template Gallery.
     *
     * For templates created in the Mailjet app, the value depends on the account that created them - `user` for the Primary API Key, `apikey` for a subaccount API Key.
     *
     */
    public string $OwnerType;
    /**
     * A JSON string containing the different pre-defined styles for this template.
     */
    public string $Presets;
    /**
     * An array indicating whether the template is a marketing, transactional or automation one. Upon `POST` request only the first value in the array is taken into account.
     *
     * Possible values:
     *
     * - `marketing`
     * - `transactional`
     * - `automation`
     *
     * If no value is set, the template will not be visible in the Mailjet app, as there is no tab under which to display it.
     *
     */
    public \MailjetSDK\Collections\Base\Template\PurposesCollection $Purposes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Author' => is_string($value) ? $this->Author = $value : parent::assignMember($name, $value),
            'Categories' => is_string($value) ? $this->Categories = $value : parent::assignMember($name, $value),
            'Copyright' => is_string($value) ? $this->Copyright = $value : parent::assignMember($name, $value),
            'Description' => is_string($value) ? $this->Description = $value : parent::assignMember($name, $value),
            'EditMode' => is_int($value) ? $this->EditMode = $value : parent::assignMember($name, $value),
            'IsStarred' => is_bool($value) ? $this->IsStarred = $value : parent::assignMember($name, $value),
            'IsTextPartGenerationEnabled' => is_bool($value) ? $this->IsTextPartGenerationEnabled = $value : parent::assignMember($name, $value),
            'Locale' => is_string($value) ? $this->Locale = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'OwnerType' => is_string($value) ? $this->OwnerType = $value : parent::assignMember($name, $value),
            'Presets' => is_string($value) ? $this->Presets = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
