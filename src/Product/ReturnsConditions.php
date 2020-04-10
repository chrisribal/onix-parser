<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList53;

class ReturnsConditions
{

    /**
     * ReturnsCodeType
     *
     * @var CodeList
     */
    protected $ReturnsCodeType;

    /**
     * ReturnsCode
     *
     * @var string
     */
    protected $ReturnsCode;

    /**
     * Set ReturnsCodeType
     *
     * @param CodeList53 $ReturnsCodeType
     * @return void
     */
    public function setReturnsCodeType(CodeList53 $ReturnsCodeType)
    {
        $this->ReturnsCodeType = $ReturnsCodeType;
    }

    /**
     * Set ReturnsCode
     *
     * @param string $ReturnsCode
     * @return void
     */
    public function setReturnsCode(string $ReturnsCode)
    {
        $this->ReturnsCode = $ReturnsCode;
    }

    /**
     * Get ReturnsCodeType
     *
     * @return CodeList
     */
    public function getReturnsCodeType()
    {
        return $this->ReturnsCodeType;
    }

    /**
     * Get ReturnsCode
     *
     * @return string
     */
    public function getReturnsCode()
    {
        return $this->ReturnsCode;
    }

}