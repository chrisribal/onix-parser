<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList154;
use Ribal\Onix\CodeList\CodeList158;
use Ribal\Onix\CodeList\CodeList159;
use Ribal\Onix\CodeList\CodeList161;
use Symfony\Component\Serializer\Annotation\Ignore;

class SupportingResource
{

	private const TYPE_FRONTCOVER = '01';
	private const TYPE_BACKCOVER = '02';
	
	private const MODE_IMAGE = '03';
	

    /**
     * ResourceContentType
     *
     * @var CodeList158
     */
    protected CodeList158 $ResourceContentType;

    /**
     * ContentAudience
     *
     * @var CodeList154
     */
    protected CodeList154 $ContentAudience;

    /**
     * ResourceMode
     *
     * @var CodeList159
     */
    protected CodeList159 $ResourceMode;

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
     * Get ResourceContentType
     *
     * @return CodeList
     */
    public function getResourceContentType()
    {
        return $this->ResourceContentType;
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
     * Get ContentAudience
     *
     * @return CodeList
     */
    public function getContentAudience()
    {
        return $this->ContentAudience;
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
     * Get ResourceMode
     *
     * @return CodeList
     */
    public function getResourceMode()
    {
        return $this->ResourceMode;
    }

    /**
     * Set ResourceLink
     *
     * ONIX expects the link inside a <ResourceVersion>, so this is a
     * shorthand that creates a linkable resource version if necessary.
     *
     * @param string $ResourceLink
     * @param string $ResourceForm Code of code list 161, defaults to "linkable resource"
     * @return void
     */
    #[Ignore]
    public function setResourceLink(string $ResourceLink, string $ResourceForm = '01')
    {
        if (! $this->ResourceVersion) {
            $this->ResourceVersion = new ResourceVersion();
            $this->ResourceVersion->setResourceForm(CodeList161::resolve($ResourceForm));
        }

        $this->ResourceVersion->setResourceLink($ResourceLink);
    }

    /**
     * Get ResourceLink
     *
     * @return string|null
     */
    #[Ignore]
    public function getResourceLink(): ?string
    {
        return $this->getLink();
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
    #[Ignore]
    public function isFrontCover()
    {
   		return $this->ResourceContentType->getCode() == self::TYPE_FRONTCOVER;
    }
    
    /**
     * Check, if the Resource is a book front cover
     *
     * @return boolean
     */
    #[Ignore]
    public function isBackCover()
    {
   		return $this->ResourceContentType->getCode() == self::TYPE_BACKCOVER;
    }
    
    /**
     * Check, if the Resource is an image
     *
     * @return boolean
     */
    #[Ignore]
    public function isImage()
    {
    	return $this->ResourceMode->getCode() === self::MODE_IMAGE;
    }
    
    /**
     * Get the link to a file or resource
     *
     * @return string
     */
    #[Ignore]
    public function getLink()
    {
    	if ($this->ResourceVersion && $this->ResourceVersion->hasLink()) {
    		return $this->ResourceVersion->getResourceLink();
    	}
    }

}
