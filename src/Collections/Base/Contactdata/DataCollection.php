<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\Base\Contactdata;

final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\ArrayContactdataData::class;
}
