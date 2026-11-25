<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output\Apikey;

/**
 * Runlevel, used to indicate data is migrated and reduced performance is expected..
 *
 * Possible values:
 *
 * - `Normal`
 * - `Softlock`
 * - `Hardlock`
 *
 * Default value: `Normal`
 *
 */
final class RunlevelDTO extends \Dmorenof\SdkRuntime\DTO
{
}
