<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList73;

class Website
{

    /**
     * WebsiteRole
     *
     * @var CodeList
     */
    protected $WebsiteRole;

    /**
     * WebsiteLink
     *
     * @var string
     */
    protected $WebsiteLink;

    /**
     * Set WebsiteRole
     *
     * @param CodeList73 $WebsiteRole
     * @return void
     */
    public function setWebsiteRole(CodeList73 $WebsiteRole)
    {
        $this->WebsiteRole = $WebsiteRole;
    }

    /**
     * Set WebsiteLink
     *
     * @param string $WebsiteLink
     * @return void
     */
    public function setWebsiteLink(string $WebsiteLink)
    {
        $this->WebsiteLink = $WebsiteLink;
    }

    /**
     * Get WebsiteRole
     *
     * @return CodeList
     */
    public function getWebsiteRole()
    {
        return $this->WebsiteRole;
    }

    /**
     * Get WebsiteLink
     *
     * @return string
     */
    public function getWebsiteLink()
    {
        return $this->WebsiteLink;
    }

}