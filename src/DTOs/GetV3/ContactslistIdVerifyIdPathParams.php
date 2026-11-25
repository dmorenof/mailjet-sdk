<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class ContactslistIdVerifyIdPathParams extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'job_ID',
        'list_ID',
    ];

    /**
     * Job ID assigned to a `POST /contactslist/{list_id}/verify` request. Use it to monitor the progress and success of the request.
     */
    public int $job_ID;
    /**
     * Unique numeric ID assigned to this contact list.
     */
    public int $list_ID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'job_ID' => is_int($value) ? $this->job_ID = $value : parent::assignMember($name, $value),
            'list_ID' => is_int($value) ? $this->list_ID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
