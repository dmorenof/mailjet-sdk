<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output\SendAPIv31Send;

final class ErrorsDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
        'ErrorCode',
        'ErrorIdentifier',
        'ErrorMessage',
        'ErrorRelatedTo',
        'StatusCode',
    ];

    /**
     * An internal Mailjet error code for this error. See [Send API Errors](/docs/email-api/send-api-v31/send-api-errors) for more information.
     */
    public string $ErrorCode;
    /**
     * A 128-bit universally unique identifier (UUID) for this error.
     * Format: UUID
     */
    public string $ErrorIdentifier;
    /**
     * An error message informing the user what the issue is.
     */
    public string $ErrorMessage;
    /**
     * Indicates which part of the payload this error is related to.
     */
    public \MailjetSDK\DTOs\Output\SendAPIv31Send\ErrorsItem\RelatedToDTO $ErrorRelatedTo;
    /**
     * The error status code. See [Send API Errors](/docs/email-api/send-api-v31/send-api-errors) for more information.
     */
    public int $StatusCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ErrorCode' => is_string($value) ? $this->ErrorCode = $value : parent::assignMember($name, $value),
            'ErrorIdentifier' => is_string($value) ? $this->ErrorIdentifier = $value : parent::assignMember($name, $value),
            'ErrorMessage' => is_string($value) ? $this->ErrorMessage = $value : parent::assignMember($name, $value),
            'StatusCode' => is_int($value) ? $this->StatusCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
