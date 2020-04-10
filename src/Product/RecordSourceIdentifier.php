<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList44;

class RecordSourceIdentifier
{

    /**
     * RecordSourceIDType
     *
     * @var CodeList
     */
    protected $RecordSourceIDType;

    /**
     * IDValue
     *
     * @var string
     */
    protected $IDValue;

    /**
     * Set RecordSourceIDType
     *
     * @param string $RecordSourceIDType
     * @return void
     */
    public function setRecordSourceIDType(CodeList44 $RecordSourceIDType)
    {
        $this->RecordSourceIDType = $RecordSourceIDType;
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
     * Get RecordSourceIDType
     *
     * @return CodeList
     */
    public function getRecordSourceIDType()
    {
        return $this->RecordSourceIDType;
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
