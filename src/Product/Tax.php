<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList62;
use Ribal\Onix\CodeList\CodeList171;

class Tax
{

    /**
     * TaxType
     *
     * @var CodeList
     */
    protected $TaxType;

    /**
     * TaxRateCode
     *
     * @var CodeList
     */
    protected $TaxRateCode;

    /**
     * TaxRatePercent
     *
     * @var float
     */
    protected $TaxRatePercent;

    /**
     * TaxableAmount
     *
     * @var float
     */
    protected $TaxableAmount;

    /**
     * TaxAmount
     *
     * @var float
     */
    protected $TaxAmount;

    /**
     * Set TaxType
     *
     * @param CodeList171 $TaxType
     * @return void
     */
    public function setTaxType(CodeList171 $TaxType)
    {
        $this->TaxType = $TaxType;
    }

    /**
     * Set TaxRateCode
     *
     * @param CodeList62 $TaxRateCode
     * @return void
     */
    public function setTaxRateCode(CodeList62 $TaxRateCode)
    {
        $this->TaxRateCode = $TaxRateCode;
    }

    /**
     * Set TaxRatePercent
     *
     * @param float $TaxRatePercent
     * @return void
     */
    public function setTaxRatePercent(string $TaxRatePercent)
    {
        $this->TaxRatePercent = (float) $TaxRatePercent;
    }

    /**
     * Set TaxableAmount
     *
     * @param float $TaxableAmount
     * @return void
     */
    public function setTaxableAmount(string $TaxableAmount)
    {
        $this->TaxableAmount = (float) $TaxableAmount;
    }

    /**
     * Set TaxAmount
     *
     * @param float $TaxAmount
     * @return void
     */
    public function setTaxAmount(string $TaxAmount)
    {
        $this->TaxAmount = (float) $TaxAmount;
    }

    /**
     * Get TaxType
     *
     * @return CodeList
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }

    /**
     * Get TaxRateCode
     *
     * @return CodeList
     */
    public function getTaxRateCode()
    {
        return $this->TaxRateCode;
    }

    /**
     * Get TaxableAmount
     *
     * @return float
     */
    public function getTaxableAmount()
    {
        return $this->TaxableAmount;
    }

    /**
     * Get TaxAmount
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }

}