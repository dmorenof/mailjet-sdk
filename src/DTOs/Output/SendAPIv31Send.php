<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class SendAPIv31Send extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A JSON array containing information about the messages sent to recipients in Bcc.
     */
    public \MailjetSDK\Collections\Output\SendAPIv31Send\BccCollection $Bcc;
    /**
     * A JSON array containing information about the messages sent to recipients in Cc.
     */
    public \MailjetSDK\Collections\Output\SendAPIv31Send\CcCollection $Cc;
    /**
     * A user-defined custom ID.
     */
    public string $CustomID;
    /**
     * A JSON array containing information about any errors with the processing of this message. Will be displayed only if processing errors occur. Each error will generate a separate error object with the below properties.
     */
    public \MailjetSDK\Collections\Output\SendAPIv31Send\ErrorsCollection $Errors;
    /**
     * Indicates the sending status of the message.
     *
     * Possible values:
     *
     * - `success`
     * - `error`
     *
     */
    public string $Status;
    /**
     * A JSON array containing information about the messages sent to recipients in To.
     */
    public \MailjetSDK\Collections\Output\SendAPIv31Send\ToCollection $To;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CustomID' => is_string($value) ? $this->CustomID = $value : parent::assignMember($name, $value),
            'Status' => is_string($value) ? $this->Status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
