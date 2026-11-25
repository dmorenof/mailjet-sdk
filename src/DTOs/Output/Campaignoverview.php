<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Campaignoverview extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates the number of clicked messages for this object.
     */
    public int $ClickedCount;
    /**
     * Indicates the number of delivered messages for this object.
     */
    public int $DeliveredCount;
    /**
     * Indicates the type of template editor used for this campaign / draft / AB Testing object:
     *
     * - `tool` - Legacy drag-and-drop template editor
     * - `html` - Legacy HTML editor
     * - `tool2` - Passport drag-and-drop template editor
     * - `html2` - HTML editor in Passport
     * - `mjml` - MJML editor in Passport
     *
     */
    public string $EditMode;
    /**
     * Indicates the edit type used for this object:
     *
     * - `full`
     * - `unknown`
     *
     */
    public string $EditType;
    /**
     * Unique numeric ID of this campaign / draft / AB Testing object.
     */
    public int $ID;
    /**
     * Indicates the type of the object:
     *
     * - `Campaign` - Sent campaign
     * - `AX` - AB Testing object
     * - `NL` - Draft
     *
     */
    public string $IDType;
    /**
     * Indicates the number of opened messages for this object.
     */
    public int $OpenedCount;
    /**
     * Indicates the number of processed messages for this object.
     */
    public int $ProcessedCount;
    /**
     * For drafts, this will show the creation time of the draft. For sent campaigns, it will display the sending time. Format - Unix timestamp.
     */
    public int $SendTimeStart;
    /**
     * Indicates whether this object is marked as starred or not.
     */
    public bool $Starred;
    /**
     * The status of the campaign or draft.
     *
     * @deprecated
     */
    public int $Status;
    /**
     * Subject line for this campaign / draft / AB Testing object.
     */
    public string $Subject;
    /**
     * Internal user-selected title for this campaign / draft / AB Testing object.
     */
    public string $Title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ClickedCount' => is_int($value) ? $this->ClickedCount = $value : parent::assignMember($name, $value),
            'DeliveredCount' => is_int($value) ? $this->DeliveredCount = $value : parent::assignMember($name, $value),
            'EditMode' => is_string($value) ? $this->EditMode = $value : parent::assignMember($name, $value),
            'EditType' => is_string($value) ? $this->EditType = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'IDType' => is_string($value) ? $this->IDType = $value : parent::assignMember($name, $value),
            'OpenedCount' => is_int($value) ? $this->OpenedCount = $value : parent::assignMember($name, $value),
            'ProcessedCount' => is_int($value) ? $this->ProcessedCount = $value : parent::assignMember($name, $value),
            'SendTimeStart' => is_int($value) ? $this->SendTimeStart = $value : parent::assignMember($name, $value),
            'Starred' => is_bool($value) ? $this->Starred = $value : parent::assignMember($name, $value),
            'Status' => is_int($value) ? $this->Status = $value : parent::assignMember($name, $value),
            'Subject' => is_string($value) ? $this->Subject = $value : parent::assignMember($name, $value),
            'Title' => is_string($value) ? $this->Title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
