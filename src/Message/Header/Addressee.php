<?php

namespace Ribal\Onix\Message\Header;

class Addressee
{
    /**
     * Addressee Name
     *
     * @var string
     */
    protected string $AddresseeName;

    /**
     * Set Addressee Name
     *
     * @var string
     */
    public function setAddresseeName(string $addresseeName): void
    {
        $this->AddresseeName = $addresseeName;
    }

    /**
     * Get Addressee Name
     *
     * @return string
     */
    public function getAddresseeName(): string
    {
        return $this->AddresseeName;
    }

}