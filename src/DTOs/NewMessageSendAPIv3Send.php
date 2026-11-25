<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs;

final class NewMessageSendAPIv3Send extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'Html-part' => 'HtmlPart',
        'Mj-CustomID' => 'MjCustomID',
        'Mj-EventPayload' => 'MjEventPayload',
        'Mj-TemplateErrorDeliver' => 'MjTemplateErrorDeliver',
        'Mj-TemplateErrorReporting' => 'MjTemplateErrorReporting',
        'Mj-TemplateID' => 'MjTemplateID',
        'Mj-TemplateLanguage' => 'MjTemplateLanguage',
        'Mj-campaign' => 'MjCampaign',
        'Mj-deduplicatecampaign' => 'MjDeduplicatecampaign',
        'Mj-prio' => 'MjPrio',
        'Mj-trackclick' => 'MjTrackclick',
        'Mj-trackopen' => 'MjTrackopen',
        'Text-part' => 'TextPart',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'HtmlPart' => 'Html-part',
        'MjCustomID' => 'Mj-CustomID',
        'MjEventPayload' => 'Mj-EventPayload',
        'MjTemplateErrorDeliver' => 'Mj-TemplateErrorDeliver',
        'MjTemplateErrorReporting' => 'Mj-TemplateErrorReporting',
        'MjTemplateID' => 'Mj-TemplateID',
        'MjTemplateLanguage' => 'Mj-TemplateLanguage',
        'MjCampaign' => 'Mj-campaign',
        'MjDeduplicatecampaign' => 'Mj-deduplicatecampaign',
        'MjPrio' => 'Mj-prio',
        'MjTrackclick' => 'Mj-trackclick',
        'MjTrackopen' => 'Mj-trackopen',
        'TextPart' => 'Text-part',
    ];

    protected const array VALIDATION = [
        'MjCustomID' => [
            'maxLength' => 64,
        ],
    ];

    /**
     * A JSON object containing descriptions of the files attached to this message. Contains the Filename, Content type and Base64 encoded content of the file. The total size of the API call payload - including all attachments, inline attachments and message content - should not exceed 15 MB.
     */
    public \MailjetSDK\Collections\NewMessageSendAPIv3Send\AttachmentsCollection $Attachments;
    /**
     * The email address (and name, optionally) of a recipient who is supposed to receive a blind carbon copy (bcc) of this message. Use this when you do not want your other recipients to see that you are sending a copy of the message to this email address. Used together with `To` and `Cc` (optional). Acceptable formats are  `john&#64;example.com` or `<john&#64;example.com>` or `"John Doe" <john&#64;example.com>`. Can include multiple contacts, which should  be separated by commas.
     */
    public string $Bcc;
    /**
     * The email address (and name, optionally) of a recipient who is supposed to receive a carbon copy (cc) of this message. Used together with `To` and `Bcc` (optional). Acceptable formats are  `john&#64;example.com` or `<john&#64;example.com>` or `"John Doe" <john&#64;example.com>`. Can include multiple contacts, which should  be separated by commas.
     */
    public string $Cc;
    /**
     * Specifies the sender email address:
     *
     * 1. When `Sender` is not specified, the email address will be used to send the message. In such cases, it must be a valid, activated sender for this account. See the `/sender` and `/metasender` resources for more info.
     *
     * 2. When `Sender` is specified as `True`, your default sender email address will be used to send the message instead, while the `FromEmail` will be displayed in the recipient's inbox. In such cases, it is not necessary for the `FromEmail` to be validated. When the default sender and `FromEmail` domains differ, the information will be displayed in the inbox as `From {FromEmail} via / sent on behalf of {default_sender_domain}`.
     *
     * > Note: If the `FromEmail` domain has a DMARC policy in effect (e.g. Yahoo, AOL), the message will not be delivered. Instead, it will either bounce or be considered as Spam.
     *
     */
    public string $FromEmail;
    /**
     * Sender name that will be displayed in the recipient's mailbox.
     */
    public string $FromName;
    /**
     * A JSON object containing additional email headers. Specified as `{header_name}:{header_value}` pairs.
     *
     */
    public \MailjetSDK\DTOs\NewMessageSendAPIv3Send\HeadersDTO $Headers;
    /**
     * Provides the HTML part of the message. Mandatory, if the `Text-part` parameter is not specified.
     */
    public string $HtmlPart;
    /**
     * A JSON object containing descriptions of the files attached to this message, that are available for inline use. Inline attachments can be visible directly in the body of the message, depending on the email client support. Insert the file into the HTML code of the email by using `cid:Filename`. The total size of the API call payload - including all attachments, inline attachments and message content - should not exceed 15 MB.
     */
    public \MailjetSDK\Collections\NewMessageSendAPIv3Send\InlineAttachmentsArray\AttachmentsCollection $Inline_attachments;
    /**
     * A user-defined custom ID, up to 64 characters.
     */
    public string $MjCustomID {
        set {
            $this->assigning('MjCustomID', $value);
            $this->MjCustomID = $value;
        }
    }
    /**
     * Defines a payload attached to the message. The Parse API will return the values in the payload. Any standard format can be used - XML, JSON, CSV etc. Equivalent of using `X-MJ-EventPayload` header through SMTP.
     */
    public string $MjEventPayload;
    /**
     * Defines if the message will be delivered if an error is discovered in the templating language. Can only be used when `Mj-TemplateLanguage=true`. Equivalent to using the `X-MJ-TemplateErrorDeliver` header through SMTP.
     *
     * Possible values:
     *
     * - `deliver`
     * - `0`
     *
     * Default value: `0`
     *
     */
    public string $MjTemplateErrorDeliver;
    /**
     * An email address, where a carbon copy with the error message is sent to in case of sending issues. Can only be used when `Mj-TemplateLanguage=true`. Equivalent to using the `X-MJ-TemplateErrorReporting` header through SMTP.
     */
    public string $MjTemplateErrorReporting;
    /**
     * The Template ID or Name to use as this email content. If the HTML/Text parts are specified, `Mj-TemplateID` will overwrite them. Equivalent to using the `X-MJ-TemplateID` header through SMTP.
     */
    public int $MjTemplateID;
    /**
     * When true, activates the template language processing. Equivalent to using the `X-MJ-TemplateLanguage` header through SMTP.
     *
     * Default value: `false`
     *
     */
    public bool $MjTemplateLanguage;
    /**
     * Specifies a custom campaign name, to  which all messages with this property value will be assigned. If the campaign doesn't already exist it will be automatically created in the Mailjet system. API users are allowed to send multiple emails from the same campaign name to the same contacts. To block this feature, use the `Mj-deduplicatecampaign` property. Equivalent of using `X-Mailjet-Campaign` header through SMTP.
     */
    public string $MjCampaign;
    /**
     * Enables or disables the option to send messages from the same campaign to the same contact multiple times. Equivalent of using `X-Mailjet-DeduplicateCampaign` header through SMTP.
     *
     * When set to `1`, a contact that has already received a message carrying a particular `Mj-campaign` value will not receive another message from that same campaign. When `0`, the same contact can receive multiple messages from the same grouped campaign.
     *
     * Possible values:
     *
     * - `0`
     * - `1`
     *
     * Default value: `0`
     *
     */
    public int $MjDeduplicatecampaign;
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
    public int $MjPrio;
    /**
     * Enable or disable click tracking on this message. This property will overwrite the preferences selected in the [Mailjet account](https://app.mailjet.com/account/settings). Equivalent of using `X-Mailjet-TrackClick` header through SMTP.
     *
     * Allowed Values:
     *
     * - `0` = use the values specified in the [Mailjet account](https://app.mailjet.com/account/settings)
     * - `1` = disable tracking for this message
     * - `2` = enable tracking for this message
     * - `3` = anonymous tracking - clicks are recorded without linking them to the individual recipient
     *
     * This property is set per message object, so a single request can carry different values for different recipients. Use `Mj-campaign` to keep those messages grouped under one campaign for reporting.
     *
     * Default value: `0`
     *
     */
    public int $MjTrackclick;
    /**
     * Enable or disable open tracking on this message. This property will overwrite the preferences selected in the [Mailjet account](https://app.mailjet.com/account/settings). Equivalent of using `X-Mailjet-TrackOpen` header through SMTP.
     *
     * Allowed Values:
     *
     * - `0` = use the values specified in the [Mailjet account](https://app.mailjet.com/account/settings)
     * - `1` = disable tracking for this message
     * - `2` = enable tracking for this message
     * - `3` = anonymous tracking - opens are recorded without linking them to the individual recipient
     *
     * This property is set per message object, so a single request can carry different values for different recipients. Use `Mj-campaign` to keep those messages grouped under one campaign for reporting.
     *
     * Default value: `0`
     *
     */
    public int $MjTrackopen;
    /**
     * A JSON array containing the list of recipients. Must include at least an `Email` property in each element. Required, unless `To` is specified. Cannot be used together with `Cc` and `Bcc`.
     */
    public \MailjetSDK\Collections\NewMessageSendAPIv3Send\RecipientsCollection $Recipients;
    /**
     * When true, default sender email address will be used to send the message, while the `FromEmail` will be displayed in the recipient's inbox. In such cases, it is not necessary for the `FromEmail` to be verified. However, the information will be displayed in the inbox as `From {from_email} via / sent on behalf of {sender_domain}`.
     *
     * Default value: `false`
     *
     * > Note: This option is disabled by default and is no longer available for new setups. Existing Default Sender configurations continue to work, but Mailjet no longer enables this functionality on new requests.
     *
     */
    public bool $Sender;
    /**
     * The email subject line.
     */
    public string $Subject;
    /**
     * Provides the Text part of the message. Mandatory, if the `Html-part` parameter is not specified.
     */
    public string $TextPart;
    /**
     * The email address (and name, optionally) of the recipients. Interchangeable with `Recipients`. Acceptable formats are  `john&#64;example.com` or `<john&#64;example.com>` or `"John Doe" <john&#64;example.com>`. Can include multiple contacts, which should  be separated by commas. Can be used together with `Cc` and `Bcc`.
     */
    public string $To;
    /**
     * A JSON object containing variables used to modify the content of your email. Specified as `{var_name}:{var_value}` pairs. Enter the information in the template text / HTML part by using the `[[var:{var_name}]]` format. Equivalent of using `X-MJ-Vars` header through SMTP.
     *
     */
    public \MailjetSDK\DTOs\NewMessageSendAPIv3Send\VarsDTO $Vars;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Bcc' => is_string($value) ? $this->Bcc = $value : parent::assignMember($name, $value),
            'Cc' => is_string($value) ? $this->Cc = $value : parent::assignMember($name, $value),
            'FromEmail' => is_string($value) ? $this->FromEmail = $value : parent::assignMember($name, $value),
            'FromName' => is_string($value) ? $this->FromName = $value : parent::assignMember($name, $value),
            'Html-part' => is_string($value) ? $this->HtmlPart = $value : parent::assignMember($name, $value),
            'Mj-CustomID' => is_string($value) ? $this->MjCustomID = $value : parent::assignMember($name, $value),
            'Mj-EventPayload' => is_string($value) ? $this->MjEventPayload = $value : parent::assignMember($name, $value),
            'Mj-TemplateErrorDeliver' => is_string($value) ? $this->MjTemplateErrorDeliver = $value : parent::assignMember($name, $value),
            'Mj-TemplateErrorReporting' => is_string($value) ? $this->MjTemplateErrorReporting = $value : parent::assignMember($name, $value),
            'Mj-TemplateID' => is_int($value) ? $this->MjTemplateID = $value : parent::assignMember($name, $value),
            'Mj-TemplateLanguage' => is_bool($value) ? $this->MjTemplateLanguage = $value : parent::assignMember($name, $value),
            'Mj-campaign' => is_string($value) ? $this->MjCampaign = $value : parent::assignMember($name, $value),
            'Mj-deduplicatecampaign' => is_int($value) ? $this->MjDeduplicatecampaign = $value : parent::assignMember($name, $value),
            'Mj-prio' => is_int($value) ? $this->MjPrio = $value : parent::assignMember($name, $value),
            'Mj-trackclick' => is_int($value) ? $this->MjTrackclick = $value : parent::assignMember($name, $value),
            'Mj-trackopen' => is_int($value) ? $this->MjTrackopen = $value : parent::assignMember($name, $value),
            'Sender' => is_bool($value) ? $this->Sender = $value : parent::assignMember($name, $value),
            'Subject' => is_string($value) ? $this->Subject = $value : parent::assignMember($name, $value),
            'Text-part' => is_string($value) ? $this->TextPart = $value : parent::assignMember($name, $value),
            'To' => is_string($value) ? $this->To = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
