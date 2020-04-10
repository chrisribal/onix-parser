<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList48;
use Ribal\Onix\CodeList\CodeList50;

class Measure
{
    
    /**
     * MeasureType
     *
     * @var CodeList
     */
    protected $MeasureType;

    /**
     * Measurement
     *
     * @var string
     */
    protected $Measurement;

    /**
     * MeasureUnitCode
     *
     * @var CodeList
     */
    protected $MeasureUnitCode;

    /**
     * Set MeasureType
     *
     * @param string $MeasureType
     * @return void
     */
    public function setMeasureType(CodeList48 $MeasureType)
    {
        $this->MeasureType = $MeasureType;
    }

    /**
     * Set Measurement
     *
     * @param string $Measurement
     * @return void
     */
    public function setMeasurement(string $Measurement)
    {
        $this->Measurement = $Measurement;
    }

    /**
     * Set MeasureUnitCode
     *
     * @param string $MeasureUnitCode
     * @return void
     */
    public function setMeasureUnitCode(CodeList50 $MeasureUnitCode)
    {
        $this->MeasureUnitCode = $MeasureUnitCode;
    }

    /**
     * Get MeasureType
     *
     * @return CodeList
     */
    public function getMeasureType()
    {
        return $this->MeasureType;
    }

    /**
     * Get Measurement
     *
     * @return int
     */
    public function getMeasurement()
    {
        return $this->Measurement;
    }

    /**
     * Get MeasureUnitCode
     *
     * @return CodeList
     */
    public function getMeasureUnitCode()
    {
        return $this->MeasureUnitCode;
    }
}
