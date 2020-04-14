<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList48;
use Ribal\Onix\CodeList\CodeList50;

class Measure
{

	private const CODE_HEIGHT = '01';
	private const CODE_WIDTH = '02';
	private const CODE_THICKNESS = '03';
	private const CODE_WEIGHT = '08';
    
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
    
    /**
     * Check if the current Measure represents the height
     *
     * @return boolean
     */
    public function isHeight()
    {
    	return $this->MeasureType->getCode() === self::CODE_HEIGHT;
    }
    
    /**
     * Check if the current Measure represents the width
     *
     * @return boolean
     */
    public function isWidth()
    {
    	return $this->MeasureType->getCode() === self::CODE_WIDTH;
    }
    
    /**
     * Check if the current Measure represents the thickness
     *
     * @return boolean
     */
    public function isThickness()
    {
    	return $this->MeasureType->getCode() === self::CODE_THICKNESS;
    }
    
    /**
     * Check if the current Measure represents the weight
     *
     * @return boolean
     */
    public function isWeight()
    {
    	return $this->MeasureType->getCode() === self::CODE_WEIGHT;
    }
    
}
