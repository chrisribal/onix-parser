<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList153;
use Ribal\Onix\CodeList\CodeList154;
use Ribal\Onix\Text;
use Ribal\Onix\TextNode;

class TextContent
{

    private const CODE_MAINDESCRIPTION = '03';

    /**
     * Type of the Text
     *
     * @var CodeList
     */
    protected $TextType;

    /**
     * ContentAudience
     *
     * @var CodeList
     */
    protected $ContentAudience;

    /**
     * SourceTitle
     *
     * @var string
     */
    protected $SourceTitle;

    /**
     * TextAuthor
     *
     * @var string
     */
    protected $TextAuthor;

    /**
     * Text
     *
     * @var string
     */
    protected $Text;

    /**
     * Set Text Type
     *
     * @param string $TextType
     * @return void
     */
    public function setTextType(CodeList153 $TextType)
    {
        $this->TextType = $TextType;
    }

    /**
     * Set ContentAudience
     *
     * @param string $ContentAudience
     * @return void
     */
    public function setContentAudience(CodeList154 $ContentAudience)
    {
        $this->ContentAudience = $ContentAudience;
    }

    /**
     * Set SourceTitle
     *
     * @param string $SourceTitle
     * @return void
     */
    public function setSourceTitle(string $SourceTitle)
    {
        $this->SourceTitle = $SourceTitle;
    }

    /**
     * Set TextAuthor
     *
     * @param string $TextAuthor
     * @return void
     */
    public function setTextAuthor(string $TextAuthor)
    {
        $this->TextAuthor = $TextAuthor;
    }

    /**
     * Get TextAuthor
     *
     * @return string $TextAuthor
     */
    public function getTextAuthor()
    {
        return $this->TextAuthor;
    }

    /**
     * Set Text
     *
     * @param Text $Text
     * @return void
     */
    public function setText(Text $Text)
    {
        $this->Text = $Text;
    }

    /**
     * Get TextType
     *
     * @return CodeList
     */
    public function getTextType()
    {
        return $this->TextType;
    }

    /**
     * Get ContentAudience
     *
     * @return CodeList
     */
    public function getContentAudience()
    {
        return $this->ContentAudience;
    }

    /**
     * Get SourceTitle
     *
     * @return void
     */
    public function getSourceTitle()
    {
        return $this->SourceTitle;
    }
    
    /**
     * Get the actual Text
     *
     * @return Text
     */
    public function getText()
    {
    	return $this->Text;
    }
    
    /**
     * Determines if the current TextContent is the product description
     *
     * @return boolean
     */
    public function isDescription()
    {
    	return $this->getTextType()->getCode() === self::CODE_MAINDESCRIPTION;
    }

}
