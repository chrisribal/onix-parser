<?php

namespace Ribal\Onix\Product;

class CollateralDetail
{

    /**
     * Array of TextContents
     *
     * @var array|TextContent
     */
    protected $TextContent = [];

    /**
     * Array of CitedContents
     *
     * @var array|CitedContent
     */
    protected $CitedContent = [];

    /**
     * Array of SupportingResource
     *
     * @var array|SupportingResource
     */
    protected $SupportingResource = [];

    /**
     * Add a new TextContent
     *
     * @param TextContent $TextContent
     * @return void
     */
    public function addTextContent(TextContent $TextContent)
    {
        $this->TextContent[] = $TextContent;
    }

    /**
     * Add new CitedContent
     *
     * @param CitedContent $CitedContent
     * @return void
     */
    public function addCitedContent(CitedContent $CitedContent)
    {
        $this->CitedContent[] = $CitedContent;
    }

    /**
     * Add new SupportingResource
     *
     * @param SupportingResource $SupportingResource
     * @return void
     */
    public function addSupportingResource(SupportingResource $SupportingResource)
    {
        $this->SupportingResource[] = $SupportingResource;
    }

    /**
     * Get TextContents
     *
     * @return array
     */
    public function getTextContent()
    {
        return $this->TextContent;
    }
    
    /**
     * Get TextContents
     *
     * @return array
     */
    public function getTextContents()
    {
    	return $this->TextContent;
    }

    /**
     * Get CitedContents
     *
     * @return array
     */
    public function getCitedContent()
    {
        return $this->CitedContent;
    }

    /**
     * Get SupportingResources
     *
     * @return array
     */
    public function getSupportingResource()
    {
        return $this->SupportingResource;
    }

    /**
     * Remove TextContent
     *
     * @param TextContent $TextContent
     * @return void
     */
    public function removeTextContent(TextContent $TextContent)
    {
    }

    /**
     * Remove the CitedContent
     *
     * @param CitedContent $CitedContent
     * @return void
     */
    public function removeCitedContent(CitedContent $CitedContent)
    {
    }

    /**
     * Remove a SupportingResource
     *
     * @param SupportingResource $SupportingResource
     * @return void
     */
    public function removeSupportingResource(SupportingResource $SupportingResource)
    {
    }
    
    /**
     * Get the product description text, if set
     *
     * @return TextContent|null
     */
    public function getDescriptionText()
    {
    	foreach ($this->TextContent as $textContent) {
    		if ($textContent->isDescription()) {
    			return $textContent;
    		}
    	}
    }

}
