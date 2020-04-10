<?php
 
namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList92;

class SupplierIdentifier
{

    /**
     * SupplierIDType
     *
     * @var CodeList
     */
    protected $SupplierIDType;

    /**
     * IDValue
     *
     * @var string
     */
    protected $IDValue;

    /**
     * Set SupplierIDType
     *
     * @param CodeList92 $SupplierIDType
     * @return void
     */
    public function setSupplierIDType(CodeList92 $SupplierIDType)
    {
        $this->SupplierIDType = $SupplierIDType;
    }

    /**
     * Set IDValue
     *
     * @param string $IDValue
     * @return void
     */
    public function setIDValue(string $IDValue)
    {
        $this->IDValue = $IDValue;
    }

    /**
     * Get SupplierIDType
     *
     * @return CodeList
     */
    public function getSupplierIDType()
    {
        return $this->SupplierIDType;
    }

    /**
     * Get IDValue
     *
     * @return string
     */
    public function getIDValue()
    {
        return $this->IDValue;
    }

}