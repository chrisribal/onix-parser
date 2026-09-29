<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList25;

class AncillaryContent
{

    /**
     * AncillaryContentType
     *
     * @var CodeList
     */
    protected $AncillaryContentType;

    /**
     * AncillaryContentDescription
     *
     * @var string
     */
    protected $AncillaryContentDescription;

    /**
     * Number
     *
     * @var int
     */
    protected $Number;

    /**
     * Set AncillaryContentType
     *
     * @param CodeList25 $AncillaryContentType
     * @return void
     */
    public function setAncillaryContentType(CodeList25 $AncillaryContentType)
    {
        $this->AncillaryContentType = $AncillaryContentType;
    }

    /**
     * Set AncillaryContentDescription
     *
     * @param string $AncillaryContentDescription
     * @return void
     */
    public function setAncillaryContentDescription(string $AncillaryContentDescription)
    {
        $this->AncillaryContentDescription = $AncillaryContentDescription;
    }

    /**
     * Set Number
     *
     * @param int $Number
     * @return void
     */
    public function setNumber(int $Number)
    {
        $this->Number = $Number;
    }

    /**
     * Get AncillaryContentType
     *
     * @return CodeList
     */
    public function getAncillaryContentType()
    {
        return $this->AncillaryContentType;
    }

    /**
     * Get AncillaryContentDescription
     *
     * @return string
     */
    public function getAncillaryContentDescription()
    {
        return $this->AncillaryContentDescription;
    }

    /**
     * Get Number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->Number;
    }

}
