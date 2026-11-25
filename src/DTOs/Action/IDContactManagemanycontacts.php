<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Action;

final class IDContactManagemanycontacts extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique numeric Job ID returned after a `POST /contact/managemanycontacts` request. Use it to monitor the progress and success of the request.
     */
    public int $JobID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'JobID' => is_int($value) ? $this->JobID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
