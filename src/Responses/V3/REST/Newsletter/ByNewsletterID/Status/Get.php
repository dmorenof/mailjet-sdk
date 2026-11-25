<?php

declare(strict_types=1);

namespace MailjetSDK\Responses\V3\REST\Newsletter\ByNewsletterID\Status;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates the number of objects in the `Data` array.
     * Format: int64
     */
    public int $Count;
    /**
     * A JSON array containing a list of objects returned by this endpoint.
     */
    public \MailjetSDK\Collections\V3\REST\Newsletter\ByNewsletterID\Status\Get\StatusDataCollection $Data;
    /**
     * Indicates the number of objects in the `Data` array.
     * Format: int64
     */
    public int $Total;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Count' => is_int($value) ? $this->Count = $value : parent::assignMember($name, $value),
            'Data' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Data = new \MailjetSDK\Collections\V3\REST\Newsletter\ByNewsletterID\Status\Get\StatusDataCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MailjetSDK\DTOs\Action\StatusNewsletterStatus::class)) : parent::assignMember($name, $value),
            'Total' => is_int($value) ? $this->Total = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
