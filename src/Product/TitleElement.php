<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList149;
use Ribal\Onix\TextNode;

class TitleElement
{
    /**
     * SequenceNumber
     *
     * @var string
     */
    protected $SequenceNumber;

    /**
     * TitleElementLevel
     *
     * @var CodeList
     */
    protected $TitleElementLevel;

    /**
     * TitlePrefix
     *
     * @var string
     */
    protected $TitlePrefix;

    /**
     * TitleWithoutPrefix
     *
     * @var string
     */
    protected $TitleWithoutPrefix;

    /**
     * TitleText
     *
     * @var string
     */
    protected $TitleText;

    /**
     * Subtitle
     *
     * @var string
     */
    protected $Subtitle;

    /**
     * PartNumber
     *
     * @var int
     */
    protected $PartNumber;

    /**
     * Set SequenceNumber
     *
     * @param string $SequenceNumber
     * @return void
     */
    public function setSequenceNumber(string $SequenceNumber)
    {
        $this->SequenceNumber = $SequenceNumber;
    }

    /**
     * Set TitleElementLevel
     *
     * @param string $TitleElementLevel
     * @return void
     */
    public function setTitleElementLevel(CodeList149 $TitleElementLevel)
    {
        $this->TitleElementLevel = $TitleElementLevel;
    }

    /**
     * TitlePrefix
     *
     * @param string $TitlePrefix
     * @return void
     */
    public function setTitlePrefix($TitlePrefix)
    {
        $this->TitlePrefix = $TitlePrefix;
    }

    /**
     * TitleWithoutPrefix
     *
     * @param string $TitleWithoutPrefix
     * @return void
     */
    public function setTitleWithoutPrefix($TitleWithoutPrefix)
    {
        $this->TitleWithoutPrefix = $TitleWithoutPrefix;
    }

    /**
     * Set PartNumber
     *
     * @param string $PartNumber
     * @return void
     */
    public function setPartNumber(string $PartNumber)
    {
        $this->PartNumber = $PartNumber;
    }

    /**
     * Set TitleText
     *
     * @param string $TitleText
     * @return void
     */
    public function setTitleText(string $TitleText)
    {
        $this->TitleText = $TitleText;
    }

    /**
     * Set Subtitle
     *
     * @param string $Subtitle
     * @return void
     */
    public function setSubtitle(string $Subtitle)
    {
        $this->Subtitle = $Subtitle;
    }

    /**
     * Get SequenceNumber
     *
     * @return void
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }

    /**
     * TitleElementLevel
     *
     * @return void
     */
    public function getTitleElementLevel()
    {
        return $this->TitleElementLevel;
    }

    /**
     * Get TitlePrefix
     *
     * @return void
     */
    public function getTitlePrefix()
    {
        return $this->TitlePrefix;
    }

    /**
     * Get TitleWithoutPrefix
     *
     * @return string
     */
    public function getTitleWithoutPrefix()
    {
        return $this->TitleWithoutPrefix;
    }

    /**
     * Get PartNumber
     *
     * @return int
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }

    /**
     * Get TitleText
     *
     * @return string
     */
    public function getTitleText()
    {
        return $this->TitleText;
    }

    /**
     * Get Subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->Subtitle;
    }
}
