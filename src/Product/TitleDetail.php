<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList15;

class TitleDetail
{

    /**
     * TitleType
     *
     * @var CodeList
     */
    protected $TitleType;

    /**
     * Array of TitleElement
     *
     * @var TitleElement[]
     */
    protected $TitleElement = [];

    /**
     * Set TitleType
     *
     * @param string $TitleType
     * @return void
     */
    public function setTitleType(CodeList15 $TitleType)
    {
        $this->TitleType = $TitleType;
    }

    /**
     * Add TitleElement
     *
     * @param TitleElement $TitleElement
     * @return void
     */
    public function addTitleElement(TitleElement $TitleElement)
    {
        $this->TitleElement[] = $TitleElement;
    }

    /**
     * Remove TitleElement
     *
     * @param TitleElement $TitleElement
     * @return void
     */
    public function removeTitleElement(TitleElement $TitleElement)
    {
    }

    /**
     * Get TitleType
     *
     * @return void
     */
    public function getTitleType()
    {
        return $this->TitleType;
    }

    /**
     * Get TitleElements
     *
     * @return void
     */
    public function getTitleElement()
    {
        return $this->TitleElement;
    }

}