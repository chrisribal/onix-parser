<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList154;
use Ribal\Onix\CodeList\CodeList158;
use Ribal\Onix\CodeList\CodeList159;

class SupportingResource
{

	private const TYPE_FRONTCOVER = '01';
	private const TYPE_BACKCOVER = '02';
	
	private const MODE_IMAGE = '03';
	

    /**
     * ResourceContentType
     *
     * @var CodeList
     */
    protected $ResourceContentType;

    /**
     * ContentAudience
     *
     * @var CodeList
     */
    protected $ContentAudience;

    /**
     * ResourceMode
     *
     * @var CodeList
     */
    protected $ResourceMode;

    /**
     * ResourceVersion
     *
     * @var ResourceVersion
     */
    protected $ResourceVersion;

    /**
     * Set ResourceContentType
     *
     * @param CodeList158 $ResourceContentType
     * @return void
     */
    public function setResourceContentType(CodeList158 $ResourceContentType)
    {
        $this->ResourceContentType = $ResourceContentType;
    }

    /**
     * Set ContentAudience
     *
     * @param CodeList154 $ContentAudience
     * @return void
     */
    public function setContentAudience(CodeList154 $ContentAudience)
    {
        $this->ContentAudience = $ContentAudience;
    }

    /**
     * Set ResourceMode
     *
     * @param CodeList159 $ResourceMode
     * @return void
     */
    public function setResourceMode(CodeList159 $ResourceMode)
    {
        $this->ResourceMode = $ResourceMode;
    }

    /**
     * Set ResourceVersion
     *
     * @param ResourceVersion $ResourceVersion
     * @return void
     */
    public function setResourceVersion(ResourceVersion $ResourceVersion)
    {
        $this->ResourceVersion = $ResourceVersion;
    }

    /**
     * Get ResourceContentType
     *
     * @return CodeList
     */
    public function getResourceContentType()
    {
        return $this->ResourceContentType;
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
     * Get ResourceMode
     *
     * @return CodeList
     */
    public function getResourceMode()
    {
        return $this->ResourceMode;
    }

    /**
     * Get ResourceVersion
     *
     * @return ResourceVersion
     */
    public function getResourceVersion()
    {
        return $this->ResourceVersion;
    }
    
    /**
     * Check, if the Resource is a book front cover
     *
     * @return boolean
     */
    public function isFrontCover()
    {
   		return $this->ResourceContentType->getCode() == self::TYPE_FRONTCOVER;
    }
    
    /**
     * Check, if the Resource is a book front cover
     *
     * @return boolean
     */
    public function isBackCover()
    {
   		return $this->ResourceContentType->getCode() == self::TYPE_BACKCOVER;
    }
    
    /**
     * Check, if the Resource is an image
     *
     * @return boolean
     */
    public function isImage()
    {
    	return $this->ResourceMode->getCode() === self::MODE_IMAGE;
    }
    
    /**
     * Get the link to a file or resource
     *
     * @return string
     */
    public function getLink()
    {
    	if ($this->ResourceVersion && $this->ResourceVersion->hasLink()) {
    		return $this->ResourceVersion->getResourceLink();
    	}
    }

}
