<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class SenderValidate extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A JSON array containing the error message in case of a failed File or DNS validation.
     */
    public string $Errors;
    /**
     * Will display a global error message in case of a failed validation.
     */
    public string $GlobalError;
    /**
     * Indicates the method of validation that needs to be completed, before this sender is activated.
     */
    public string $ValidationMethod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Errors' => is_string($value) ? $this->Errors = $value : parent::assignMember($name, $value),
            'GlobalError' => is_string($value) ? $this->GlobalError = $value : parent::assignMember($name, $value),
            'ValidationMethod' => is_string($value) ? $this->ValidationMethod = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
