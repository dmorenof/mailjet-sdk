<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Output;

final class Useragentstatistics extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Number of clicks using this browser / email client.
     */
    public int $Count;
    /**
     * User of messages clicked using this browser / email client.
     */
    public int $DistinctCount;
    /**
     * Platform on which the browser / email client runs.
     */
    public string $Platform;
    /**
     * Description of the user agent.
     */
    public string $UserAgent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Count' => is_int($value) ? $this->Count = $value : parent::assignMember($name, $value),
            'DistinctCount' => is_int($value) ? $this->DistinctCount = $value : parent::assignMember($name, $value),
            'Platform' => is_string($value) ? $this->Platform = $value : parent::assignMember($name, $value),
            'UserAgent' => is_string($value) ? $this->UserAgent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
