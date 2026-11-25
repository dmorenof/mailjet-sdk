<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\Base\Contactdata;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MailjetSDK\DTOs\ArrayContactdataData> */
final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\ArrayContactdataData::class;
}
