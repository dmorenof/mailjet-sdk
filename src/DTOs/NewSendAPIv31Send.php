<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewSendAPIv31Send extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Messages',
];

    /**
     * When true, enables additional error checks relating to the Send API v3.1 payload. Keep in mind that For a list of all error checks enabled by this, please see the [Send API errors](/docs/email-api/send-api-v31/send-api-errors) section in the Email API Guides.
     */
    public bool $AdvanceErrorHandling;
    /**
     * An object containing properties that will be applied to all message objects (). Use this whenever you have property values that are the same across multiple messages in the payload.
     *
     * In `Globals` you can specify any of the message properties __except `To`__.
     *
     * If the properties are specified in both `Globals` and in a message object:
     *
     *   - String, integer and boolean properties will be overwritten by the message properties of the same name.
     *   - Object type properties (`From`, `Sender`, `ReplyTo`, `TemplateErrorReporting`, `Headers`, `Variables`) will be merged with the message property, overwriting any concurrent property.
     *   - Array type properties (`Cc`, `Bcc`, `Attachments`, `InlineAttachments`) will be appended.
     *
     * For more information and examples click [here](/docs/email-api/send-api-v31/set-global-payload-properties).
     *
     */
    public \MailjetSDK\DTOs\NewSendAPIv31Send\GlobalsDTO $Globals;
    /**
     * A JSON array containing message objects.
     */
    public \MailjetSDK\Collections\NewSendAPIv31Send\MessagesCollection $Messages;
    /**
     * When true, the API call will be run in Sandbox mode. This will disable the delivery of the message, but the API will still perform all necessary validations. You will still receive success or error messages related to the processing of the message. If the message is processed successfully, you will receive the standard response payload but without the Message ID and UUID.
     *
     * Default value: `false`
     *
     */
    public bool $SandboxMode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AdvanceErrorHandling' => is_bool($value) ? $this->AdvanceErrorHandling = $value : parent::assignMember($name, $value),
            'SandboxMode' => is_bool($value) ? $this->SandboxMode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
