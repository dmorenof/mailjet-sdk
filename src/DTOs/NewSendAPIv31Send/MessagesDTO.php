<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\NewSendAPIv31Send;

final class MessagesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'From',
        'To',
    ];

    protected const array VALIDATION = [
        'CustomID' => [
            'maxLength' => 64,
        ],
        'Subject' => [
            'maxLength' => 255,
        ],
    ];

    /**
     * A JSON array containing descriptions of the files attached to this message. The array contains the Filename, Content type and Base64 encoded content of the file. The total size of the API call payload - including all attachments, inline attachments and message content - should not exceed 15 MB.
     */
    public \MailjetSDK\Collections\NewSendAPIv31Send\MessagesItem\AttachmentsCollection $Attachments;
    /**
     * A JSON array recipients who are supposed to receive a blind carbon copy (bcc) of this message. Use this when you do not want your other recipients to see that you are sending a copy of the message to this email address. Used together with `To` and `Cc` (optional). Each recipient object within the array may contain the name, but must always contain the recipient email.
     */
    public \MailjetSDK\Collections\NewSendAPIv31Send\MessagesItem\BccCollection $Bcc;
    /**
     * A JSON array of recipients who are supposed to receive a carbon copy (cc) of this message. Used together with `To` and `Bcc` (optional). Each recipient object within the array may contain the name, but must always contain the recipient email.
     */
    public \MailjetSDK\Collections\NewSendAPIv31Send\MessagesItem\CcCollection $Cc;
    /**
     * Specifies a custom campaign name, to  which all messages with this property value will be assigned. If the campaign doesn't already exist it will be automatically created in the Mailjet system. API users are allowed to send multiple emails from the same campaign name to the same contacts. To block this feature, use the `DeduplicateCampaign` property. Equivalent of using `X-Mailjet-Campaign` header through SMTP.
     */
    public string $CustomCampaign;
    /**
     * A user-defined custom ID, up to 64 characters.
     */
    public string $CustomID {
        set {
            $this->assigning('CustomID', $value);
            $this->CustomID = $value;
        }
    }
    /**
     * Enables or disables the option to send messages from the same campaign to the same contact multiple times. Equivalent of using `X-Mailjet-DeduplicateCampaign` header through SMTP.
     *
     * When set to `true`, a contact that has already received a message carrying a particular `CustomCampaign` value will not receive another message from that same campaign. When `false`, the same contact can receive multiple messages from the same grouped campaign.
     *
     * Default value: `false`
     *
     */
    public bool $DeduplicateCampaign;
    /**
     * Defines a payload attached to the message. The Parse API will return the values in the payload. Any standard format can be used - XML, JSON, CSV etc. Equivalent of using `X-MJ-EventPayload` header through SMTP.
     */
    public string $EventPayload;
    /**
     * A JSON object containing 2 properties - `Email` and `Name`. Specifies the sender name and email address:
     *
     * 1. When `Sender` is not specified, the email address will be used to send the message. In such cases, it must be a valid, activated sender for this account. See the `/sender` and `/metasender` resources for more info.
     *
     * 2. When `Sender` is specified, the `Sender` email address will be used to send the message, while the `From` email address will be displayed in the recipient's inbox. In such cases, it is not necessary for the `From` address to be validated. When the `Sender` and `From` domains differ, the information will be displayed in the inbox as `From {from_email} via / sent on behalf of {sender_domain}`.
     *
     * > Note: If the `From` domain has a DMARC policy in effect (e.g. Yahoo, AOL), the message will not be delivered. Instead, it will either bounce or be considered as Spam.
     *
     */
    public \MailjetSDK\DTOs\NewSendAPIv31Send\MessagesItem\FromDTO $From;
    /**
     * Provides the HTML part of the message. Mandatory, if the `TextPart` and `TemplateID` parameters are not specified.
     */
    public string $HTMLPart;
    /**
     * A JSON object containing additional email headers. Specified as `{header_name}:{header_value}` pairs.
     *
     */
    public \MailjetSDK\DTOs\NewSendAPIv31Send\MessagesItem\HeadersDTO $Headers;
    /**
     * A JSON array containing descriptions of the files attached to this message, that are available for inline use. Inline attachments can be visible directly in the body of the message, depending on the email client support. Insert the file into the HTML code of the email by using `cid:Filename`, or, if you have specified `ContentID`, by using `cid:ContentID`. The total size of the API call payload - including all attachments, inline attachments and message content - should not exceed 15 MB.
     */
    public \MailjetSDK\Collections\NewSendAPIv31Send\MessagesItem\InlinedAttachmentsCollection $InlinedAttachments;
    /**
     * Indicates the processing priority inside your account (API Key) scheduling queue. Equivalent of using the `X-Mailjet-Prio` header through SMTP.
     *
     * There are two queues - low priority (`0`, `1`) and high priority (`2`, `3`):
     *
     * - `0` - low priority queue, processed first in, first out
     * - `1` - goes before the low priority queue, processed last in, first out
     * - `2` - high priority queue, processed first in, first out
     * - `3` - goes before the high priority queue, processed last in, first out
     *
     * Send transactional messages with `2` and marketing messages with `0`. Codes `1` and `3` are intended for narrow cases where tight control of the email flow is necessary - `3` can block messages sent with `2`, so it is not advised for large volumes. Whether high or low priority, the processing speed is the same - only the order changes.
     *
     * [More information](https://documentation.mailjet.com/hc/en-us/articles/360043571894-Email-Priority-Management).
     *
     * Default value: `2`
     *
     */
    public int $Priority;
    /**
     * An object containing the email address and name (optional), to which replies to this message will go.
     */
    public \MailjetSDK\DTOs\NewSendAPIv31Send\MessagesItem\ReplyToDTO $ReplyTo;
    /**
     * A JSON object containing 2 properties - `Email` and `Name`. Specifies the sender name and email address. Used when you want to send emails on behalf of a different email address. Must be a valid, activated sender for this account. See the `/sender` and `/metasender` resources for more info. Only `Email` is a mandatory property within this object.
     *
     * The `Sender` email address will be used to send the message, while the `From` email address will be displayed in the recipient's inbox. In such cases, it is not necessary for the `From` address to be verified. However, the information will be displayed in the inbox as `From {from_email} via / sent on behalf of {sender_domain}`.
     *
     * > Note: This option is disabled by default and is no longer available for new setups. Existing Default Sender configurations continue to work, but Mailjet no longer enables this functionality on new requests.
     *
     */
    public \MailjetSDK\DTOs\NewSendAPIv31Send\MessagesItem\SenderDTO $Sender;
    /**
     * The email subject line.
     */
    public string $Subject {
        set {
            $this->assigning('Subject', $value);
            $this->Subject = $value;
        }
    }
    /**
     * When true, the message delivery will proceed if an error is discovered in the templating language. When false, the message delivery will be stopped. Can only be used when `TemplateLanguage=true`. Equivalent to using the `X-MJ-TemplateErrorDeliver` header through SMTP.
     *
     * Default value: `false`
     *
     */
    public bool $TemplateErrorDeliver;
    /**
     * An object containing the email address and name of the recipient, to whom a carbon copy with the error message is sent to in case of sending issues. Can only be used when `TemplateLanguage=true`. Equivalent to using the `X-MJ-TemplateErrorReporting` header through SMTP.
     */
    public \MailjetSDK\DTOs\NewSendAPIv31Send\MessagesItem\ErrorReportingDTO $TemplateErrorReporting;
    /**
     * Unique numeric ID of the template to be used as email content. If the HTML/Text parts are specified, `TemplateID` will overwrite them. Equivalent to using the `X-MJ-TemplateID` header through SMTP.
     */
    public int $TemplateID;
    /**
     * When true, activates the template language processing. Equivalent to using the `X-MJ-TemplateLanguage` header through SMTP.
     *
     * Default value: `false`
     *
     */
    public bool $TemplateLanguage;
    /**
     * Provides the Text part of the message. Mandatory, if the `HTMLPart` and `TemplateID` parameters are not specified.
     */
    public string $TextPart;
    /**
     * A JSON array of recipients. Each recipient object within the array may contain the name, but must always contain the recipient email.
     */
    public \MailjetSDK\Collections\NewSendAPIv31Send\MessagesItem\ToCollection $To;
    /**
     * Enable or disable click tracking on this message. This property will overwrite the preferences selected in the [Mailjet account](https://app.mailjet.com/account/settings). Equivalent of using `X-Mailjet-TrackClick` header through SMTP.
     *
     * Allowed Values:
     *   - `account_default` = use the values specified in the [Mailjet account](https://app.mailjet.com/account/settings)
     *   - `disabled` = disable tracking for this message
     *   - `enabled` = enable tracking for this message
     *   - `anon` = record clicks without linking them to the individual recipient
     *
     * This property is set per message object, so a single request can carry different values for different recipients - for example `enabled` for contacts who consented to tracking and `disabled` or `anon` for those who did not. Use `CustomCampaign` to keep those messages grouped under one campaign for reporting.
     *
     * Default value: `account_default`
     *
     */
    public \MailjetSDK\Enums\NewSendAPIv31Send\MessagesItem\TrackClicksEnum $TrackClicks;
    /**
     * Enable or disable open tracking on this message. This property will overwrite the preferences selected in the [Mailjet account](https://app.mailjet.com/account/settings). Equivalent of using `X-Mailjet-TrackOpen` header through SMTP.
     *
     * Allowed Values:
     *   - `account_default` = use the values specified in the [Mailjet account](https://app.mailjet.com/account/settings)
     *   - `disabled` = disable tracking for this message
     *   - `enabled` = enable tracking for this message
     *   - `anon` = record opens without linking them to the individual recipient
     *
     * This property is set per message object, so a single request can carry different values for different recipients - for example `enabled` for contacts who consented to tracking and `disabled` or `anon` for those who did not. Use `CustomCampaign` to keep those messages grouped under one campaign for reporting.
     *
     * Default value: `account_default`
     *
     */
    public \MailjetSDK\Enums\NewSendAPIv31Send\MessagesItem\TrackOpensEnum $TrackOpens;
    /**
     * URL tags to append every URL link in the message. The user needs to provide the query between the `?` and `#` characters in the URL. The URLTags value needs to be URL-encoded.
     */
    public string $URLTags;
    /**
     * A JSON object containing variables used to modify the content of your email. Specified as `{var_name}:{var_value}` pairs. Enter the information in the template text / HTML part by using the `[[var:{var_name}]]` format. Equivalent of using `X-MJ-Vars` header through SMTP.
     */
    public \MailjetSDK\DTOs\NewSendAPIv31Send\MessagesItem\VariablesDTO $Variables;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CustomCampaign' => is_string($value) ? $this->CustomCampaign = $value : parent::assignMember($name, $value),
            'CustomID' => is_string($value) ? $this->CustomID = $value : parent::assignMember($name, $value),
            'DeduplicateCampaign' => is_bool($value) ? $this->DeduplicateCampaign = $value : parent::assignMember($name, $value),
            'EventPayload' => is_string($value) ? $this->EventPayload = $value : parent::assignMember($name, $value),
            'HTMLPart' => is_string($value) ? $this->HTMLPart = $value : parent::assignMember($name, $value),
            'Priority' => is_int($value) ? $this->Priority = $value : parent::assignMember($name, $value),
            'Subject' => is_string($value) ? $this->Subject = $value : parent::assignMember($name, $value),
            'TemplateErrorDeliver' => is_bool($value) ? $this->TemplateErrorDeliver = $value : parent::assignMember($name, $value),
            'TemplateID' => is_int($value) ? $this->TemplateID = $value : parent::assignMember($name, $value),
            'TemplateLanguage' => is_bool($value) ? $this->TemplateLanguage = $value : parent::assignMember($name, $value),
            'TextPart' => is_string($value) ? $this->TextPart = $value : parent::assignMember($name, $value),
            'TrackClicks' => is_string($value) ? $this->TrackClicks = \MailjetSDK\Enums\NewSendAPIv31Send\MessagesItem\TrackClicksEnum::from($value) : parent::assignMember($name, $value),
            'TrackOpens' => is_string($value) ? $this->TrackOpens = \MailjetSDK\Enums\NewSendAPIv31Send\MessagesItem\TrackOpensEnum::from($value) : parent::assignMember($name, $value),
            'URLTags' => is_string($value) ? $this->URLTags = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
