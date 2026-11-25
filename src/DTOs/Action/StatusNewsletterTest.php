<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Action;

final class StatusNewsletterTest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The status of the newsletter. The status is not affected by the test:
     *
     *  - `AXCancelled`
     *  - `Deleted`
     *  - `Archived`
     *  - `Draft`
     *  - `Programmed` (scheduled)
     *  - `Sent`
     *  - `AXTested` (AB Testing versions sent, but winning version not selected yet)
     *  - `AXSelected` (AB Testing winning version selected and sent)
     *
     */
    public string $Status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
