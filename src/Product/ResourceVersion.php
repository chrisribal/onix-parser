<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList161;

class ResourceVersion
{

    /**
     * ResourceForm
     *
     * @var CodeList
     */
    protected $ResourceForm;

    /**
     * ResourceLink
     *
     * @var string
     */
    protected $ResourceLink;

    /**
     * Set ResourceForm
     *
     * @param CodeList161 $ResourceForm
     * @return void
     */
    public function setResourceForm(CodeList161 $ResourceForm)
    {
        $this->ResourceForm = $ResourceForm;
    }

    /**
     * Set ResourceLink
     *
     * @param string $ResourceLink
     * @return void
     */
    public function setResourceLink(string $ResourceLink)
    {
        $this->ResourceLink = $ResourceLink;
    }

    /**
     * Get ResourceForm
     *
     * @return CodeList
     */
    public function getResourceForm()
    {
        return $this->ResourceForm;
    }

    /**
     * Get ResourceLink
     *
     * @return string
     */
    public function getResourceLink()
    {
        return $this->ResourceLink;
    }

}
