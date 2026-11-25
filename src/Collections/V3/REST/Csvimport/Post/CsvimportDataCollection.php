<?php

declare(strict_types=1);

namespace MailjetSDK\Collections\V3\REST\Csvimport\Post;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MailjetSDK\DTOs\Output\Csvimport> */
final class CsvimportDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MailjetSDK\DTOs\Output\Csvimport::class;
}
