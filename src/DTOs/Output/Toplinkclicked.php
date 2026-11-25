<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Toplinkclicked extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Number of unique (deduplicated) clicks for this link. When `ActualClicks=true`, will return the total number of clicks instead.
     */
    public int $ClickedCount;
    /**
     * Unique numeric ID for this link.
     */
    public int $LinkId;
    /**
     * The URL of the clicked link.
     */
    public string $Url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ClickedCount' => is_int($value) ? $this->ClickedCount = $value : parent::assignMember($name, $value),
            'LinkId' => is_int($value) ? $this->LinkId = $value : parent::assignMember($name, $value),
            'Url' => is_string($value) ? $this->Url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
