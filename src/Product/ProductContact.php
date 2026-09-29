<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList198;
use Ribal\Onix\CodeList\CodeList91;

class ProductContact
{
    /**
     * ProductContactRole
     *
     * @var CodeList198
     */
    protected CodeList198 $ProductContactRole;

    /**
     * Company Name
     *
     * @var string
     */
    protected string $ProductContactName;

    /**
     * Person Name
     *
     * @var string
     */
    protected string $ContactName;

    /**
     * Telephone
     *
     * @var string
     */
    protected string $TelephoneNumber;

    /**
     * Email
     *
     * @var string
     */
    protected string $EmailAddress;

    /**
     * Street Address
     *
     * @var string
     */
    protected string $StreetAddress;

    /**
     * City
     *
     * @var string
     */
    protected string $LocationName;

    /**
     * Postal Code
     *
     * @var string
     */
    protected string $PostalCode;

    /**
     * Country Code
     *
     * @var CodeList91
     */
    protected CodeList91 $CountryCode;

    /**
     * Set ProductContactRole
     *
     * @param CodeList198 $ProductContactRole
     * @return void
     */
    public function setProductContactRole(CodeList198 $ProductContactRole): void
    {
        $this->ProductContactRole = $ProductContactRole;
    }

    /**
     * Get ProductContactRole
     *
     * @return CodeList198
     */
    public function getProductContactRole(): CodeList198
    {
        return $this->ProductContactRole;
    }

    /**
     * Set ProductContactName
     *
     * @param string $ProductContactName
     * @return void
     */
    public function setProductContactName(string $ProductContactName): void
    {
        $this->ProductContactName = $ProductContactName;
    }

    /**
     * Get ProductContactName
     *
     * @return string
     */
    public function getProductContactName(): string
    {
        return $this->ProductContactName;
    }

    /**
     * Set ContactName
     *
     * @param string $ContactName
     * @return void
     */
    public function setContactName(string $ContactName): void
    {
        $this->ContactName = $ContactName;
    }

    /**
     * Get ContactName
     *
     * @return string
     */
    public function getContactName(): string
    {
        return $this->ContactName;
    }

    /**
     * Set TelephoneNumber
     *
     * @param string $TelephoneNumber
     * @return void
     */
    public function setTelephoneNumber(string $TelephoneNumber): void
    {
        $this->TelephoneNumber = $TelephoneNumber;
    }

    /**
     * Get TelephoneNumber
     *
     * @return string
     */
    public function getTelephoneNumber(): string
    {
        return $this->TelephoneNumber;
    }

    /**
     * Set EmailAddress
     *
     * @param string $EmailAddress
     * @return void
     */
    public function setEmailAddress(string $EmailAddress): void
    {
        $this->EmailAddress = $EmailAddress;
    }

    /**
     * Get EmailAddress
     *
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->EmailAddress;
    }

    /**
     * Set StreetAddress
     *
     * @param string $StreetAddress
     * @return void
     */
    public function setStreetAddress(string $StreetAddress): void
    {
        $this->StreetAddress = $StreetAddress;
    }

    /**
     * Get StreetAddress
     *
     * @return string
     */
    public function getStreetAddress(): string
    {
        return $this->StreetAddress;
    }

    /**
     * Set LocationName
     *
     * @param string $LocationName
     * @return void
     */
    public function setLocationName(string $LocationName): void
    {
        $this->LocationName = $LocationName;
    }

    /**
     * Get LocationName
     *
     * @return string
     */
    public function getLocationName(): string
    {
        return $this->LocationName;
    }

    /**
     * Set PostalCode
     *
     * @param string $PostalCode
     * @return void
     */
    public function setPostalCode(string $PostalCode): void
    {
        $this->PostalCode = $PostalCode;
    }

    /**
     * Get PostalCode
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->PostalCode;
    }

    /**
     * Set CountryCode
     *
     * @param CodeList91 $CountryCode
     * @return void
     */
    public function setCountryCode(CodeList91 $CountryCode): void
    {
        $this->CountryCode = $CountryCode;
    }

    /**
     * Get CountryCode
     *
     * @return CodeList91
     */
    public function getCountryCode(): CodeList91
    {
        return $this->CountryCode;
    }
}