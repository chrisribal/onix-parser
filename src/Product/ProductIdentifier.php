<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList5;

class ProductIdentifier
{
    protected const ISBN10_TYPE = "02";
    protected const ISBN13_TYPE = "15";

    /**
     * ProductIDType
     *
     * @var CodeListList5
     */
    protected $ProductIDType;

    /**
     * IDValue
     *
     * @var string
     */
    protected $IDValue;

    /**
     * Set ProductIDType
     *
     * @param string $value
     * @return void
     */
    public function setProductIDType(CodeList5 $ProductIDType)
    {
        $this->ProductIDType = $ProductIDType;
    }

    /**
     * Set IDValue
     *
     * @param string $value
     * @return void
     */
    public function setIDValue(string $value)
    {
        $this->IDValue = $value;
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

    /**
     * Determine if idenfitier is ISBN10
     *
     * @return boolean
     */
    public function isISBN10()
    {
        return $this->ProductIDType->getCode() == self::ISBN10_TYPE;
    }

    /**
     * Determine if idenfitier is ISBN13
     *
     * @return boolean
     */
    public function isISBN13()
    {
        return $this->ProductIDType->getCode() == self::ISBN13_TYPE;
    }

}