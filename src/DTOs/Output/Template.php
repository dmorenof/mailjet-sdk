<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Template extends \MailjetSDK\DTOs\Base\Template
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Timestamp indicating when the template was created.
     */
    public string $CreatedAt;
    /**
     * Unique numeric ID for this template.
     */
    public int $ID;
    /**
     * Timestamp indicating when the template was last updated.
     */
    public string $LastUpdatedAt;
    /**
     * The `UserID` associated with the owner of this template.
     */
    public int $OwnerId;
    /**
     * A JSON array containing Data ID's for the previews.
     */
    public \MailjetSDK\DTOs\Output\Template\PreviewsDTO $Previews;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CreatedAt' => is_string($value) ? $this->CreatedAt = $value : parent::assignMember($name, $value),
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'LastUpdatedAt' => is_string($value) ? $this->LastUpdatedAt = $value : parent::assignMember($name, $value),
            'OwnerId' => is_int($value) ? $this->OwnerId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
