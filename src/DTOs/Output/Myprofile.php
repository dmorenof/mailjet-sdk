<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Myprofile extends \MailjetSDK\DTOs\Base\Myprofile
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Unique numeric ID for this profile.
     */
    public int $ID;
    /**
     * The User ID linked to this profile.
     */
    public int $UserID;
    /**
     * The VAT percentage applicable for the registered country.
     */
    public float $VAT;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ID' => is_int($value) ? $this->ID = $value : parent::assignMember($name, $value),
            'UserID' => is_int($value) ? $this->UserID = $value : parent::assignMember($name, $value),
            'VAT' => is_float($value) ? $this->VAT = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
