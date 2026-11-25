<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\Base;

class Contactdata extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A JSON array containing contact properties and their values. The properties must have been created beforehand (refer to `/contactmetadata`).
     */
    public \MailjetSDK\Collections\Base\Contactdata\DataCollection $Data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Data' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Data = new \MailjetSDK\Collections\Base\Contactdata\DataCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MailjetSDK\DTOs\ArrayContactdataData::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
