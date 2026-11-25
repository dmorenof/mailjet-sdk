<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Action;

final class IDContactslistVerify extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Job ID assigned to a `POST /contactslist/{list_id}/verify` request. Use it to monitor the progress and success of the request.
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
