<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList93;

class Supplier
{

    /**
     * SupplierRole
     *
     * @var CodeList
     */
    protected $SupplierRole;

    /**
     * Array of SupplierIdentifiers
     *
     * @var array|SupplierIdentifier
     */
    protected $SupplierIdentifier = [];

    /**
     * SupplierName
     *
     * @var string
     */
    protected $SupplierName;

    /**
     * TelephoneNumber
     *
     * @var string
     */
    protected $TelephoneNumber;

    /**
     * Set SupplierRole
     *
     * @param CodeList93 $SupplierRole
     * @return void
     */
    public function setSupplierRole(CodeList93 $SupplierRole)
    {
        $this->SupplierRole = $SupplierRole;
    }

    /**
     * Set SupplierIdentifier
     *
     * @param SupplierIdentifier $SupplierIdentifier
     * @return void
     */
    public function addSupplierIdentifier(SupplierIdentifier $SupplierIdentifier)
    {
        $this->SupplierIdentifier[] = $SupplierIdentifier;
    }

    /**
     * Set SupplierName
     *
     * @param string $SupplierName
     * @return void
     */
    public function setSupplierName(string $SupplierName)
    {
        $this->SupplierName = $SupplierName;
    }

    /**
     * Set TelephoneNumber
     *
     * @param string $TelephoneNumber
     * @return void
     */
    public function setTelephoneNumber(string $TelephoneNumber)
    {
        $this->TelephoneNumber = $TelephoneNumber;
    }

    /**
     * Get SupplierRole
     *
     * @return CodeList
     */
    public function getSupplierRole()
    {
        return $this->SupplierRole;
    }

    /**
     * Get SupplierIdentifiers
     *
     * @return array
     */
    public function getSupplierIdentifier()
    {
        return $this->SupplierIdentifier;
    }

    /**
     * Get SupplierName
     *
     * @return string
     */
    public function getSupplierName()
    {
        return $this->SupplierName;
    }

    /**
     * Get TelephoneNumber
     *
     * @return string
     */
    public function getTelephoneNumber()
    {
        return $this->TelephoneNumber;
    }

    public function removeSupplierIdentifier(SupplierIdentifier $SupplierIdentifier)
    {
    }

}