<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output\ContactslistVerifyData;

/**
 * Aggregated results from the outcome of the verification job processing. This will update as the job processes.
 */
final class SummaryDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \MailjetSDK\DTOs\Output\ContactslistVerifyData\Summary\ResultDTO $result;
    public \MailjetSDK\DTOs\Output\ContactslistVerifyData\Summary\RiskDTO $risk;

}
