<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList16;

class WorkIdentifier
{

    /**
     * WorkIDType
     *
     * @var CodeList
     */
    protected $WorkIDType;
    
    /**
     * IDValue
     *
     * @var string
     */
    protected $IDValue;

    /**
     * Set WorkIDType
     *
     * @param CodeList16 $WorkIDType
     * @return void
     */
    public function setWorkIDType(CodeList16 $WorkIDType)
    {
        $this->WorkIDType = $WorkIDType;
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
     * Get WorkIDType
     *
     * @return void
     */
    public function getWorkIDType()
    {
        return $this->WorkIDType;
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