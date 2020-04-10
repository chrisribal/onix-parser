<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList9;

class ProductClassification
{

    /**
     * ProductClassificationType
     *
     * @var CodeList
     */
    protected $ProductClassificationType;

    /**
     * ProductClassificationCode
     *
     * @var string
     */
    protected $ProductClassificationCode;

    /**
     * Set ProductClassificationType
     *
     * @param string $ProductClassificationType
     * @return void
     */
    public function setProductClassificationType(CodeList9 $ProductClassificationType)
    {
        $this->ProductClassificationType = $ProductClassificationType;
    }

    /**
     * Set ProductClassificationCode
     *
     * @param string $ProductClassificationCode
     * @return void
     */
    public function setProductClassificationCode(string $ProductClassificationCode)
    {
        $this->ProductClassificationCode = $ProductClassificationCode;
    }

    /**
     * Get ProductClassificationType
     *
     * @return CodeList
     */
    public function getProductClassificationType()
    {
        return $this->ProductClassificationType;
    }

    /**
     * Get ProductClassificationCode
     *
     * @return string
     */
    public function getProductClassificationCode()
    {
        return $this->ProductClassificationCode;
    }

}