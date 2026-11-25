<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ContactManagemanycontactsIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'job_ID',
    ];

    /**
     * Unique numeric `JobID` returned after a `POST /contact/managemanycontacts` request. Use it to monitor the progress and success of the request.
     */
    public int $job_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'job_ID' => is_int($value) ? $this->job_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
