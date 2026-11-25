<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\NewSendAPIv31Send\MessagesItem;

/**
 * A JSON object containing variables used to modify the content of your email. Specified as `{var_name}:{var_value}` pairs. Enter the information in the template text / HTML part by using the `[[var:{var_name}]]` format. Equivalent of using `X-MJ-Vars` header through SMTP.
 */
final class VariablesDTO extends \Dmorenof\SdkRuntime\DTO
{
}
