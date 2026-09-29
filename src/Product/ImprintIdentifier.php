<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList44;

class ImprintIdentifier
{

    /**
     * ImprintIDType
     *
     * @var CodeList
     */
    protected $ImprintIDType;

    /**
     * IDValue
     *
     * @var string
     */
    protected $IDValue;

    /**
     * Set ImprintIDType
     *
     * @param CodeList44 $ImprintIDType
     * @return void
     */
    public function setImprintIDType(CodeList44 $ImprintIDType)
    {
        $this->ImprintIDType = $ImprintIDType;
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
     * Get ImprintIDType
     *
     * @return CodeList
     */
    public function getImprintIDType()
    {
        return $this->ImprintIDType;
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
