<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList23;
use Ribal\Onix\CodeList\CodeList24;

class Extent
{

    /**
     * ExtentType
     *
     * @var CodeList
     */
    protected $ExtentType;

    /**
     * ExtentValue
     *
     * @var string
     */
    protected $ExtentValue;

    /**
     * ExtentUnit
     *
     * @var CodeList
     */
    protected $ExtentUnit;

    /**
     * Set ExtentType
     *
     * @param string $ExtentType
     * @return void
     */
    public function setExtentType(CodeList23 $ExtentType)
    {
        $this->ExtentType = $ExtentType;
    }

    /**
     * Set ExtentValue
     *
     * @param string $ExtentValue
     * @return void
     */
    public function setExtentValue(string $ExtentValue)
    {
        $this->ExtentValue = $ExtentValue;
    }

    /**
     * Set ExtentUnit
     *
     * @param string $ExtentUnit
     * @return void
     */
    public function setExtentUnit(CodeList24 $ExtentUnit)
    {
        $this->ExtentUnit = $ExtentUnit;
    }

    /**
     * Get ExtentType
     *
     * @return CodeList
     */
    public function getExtentType()
    {
        return $this->ExtentType;
    }

    /**
     * Get ExtentValue
     *
     * @return string
     */
    public function getExtentValue()
    {
        return $this->ExtentValue;
    }

    /**
     * Get ExtentUnit
     *
     * @return CodeList
     */
    public function getExtentUnit()
    {
        return $this->ExtentUnit;
    }

}
