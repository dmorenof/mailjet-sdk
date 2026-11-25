<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\NewSendAPIv31Send;

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
final class GlobalsDTO extends \Dmorenof\SdkRuntime\DTO
{
}
