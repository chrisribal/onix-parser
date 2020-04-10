<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList45;

class Publisher
{

    /**
     * PublishingRole
     *
     * @var CodeList
     */
    protected $PublishingRole;

    /**
     * PublisherIdentifier
     *
     * @var array
     */
    protected $PublisherIdentifier = [];

    /**
     * PublisherName
     *
     * @var string
     */
    protected $PublisherName;

    /**
     * Website
     *
     * @var Website
     */
    protected $Website;

    /**
     * Set PublishingRole
     *
     * @param CodeList45 $PublishingRole
     * @return void
     */
    public function setPublishingRole(CodeList45 $PublishingRole)
    {
        $this->PublishingRole = $PublishingRole;
    }

    /**
     * Set PublisherIdentifier
     *
     * @param PublisherIdentifier $PublisherIdentifier
     * @return void
     */
    public function setPublisherIdentifier($PublisherIdentifier)
    {
        if (!is_array($PublisherIdentifier)) {
            $PublisherIdentifier = [$PublisherIdentifier];
        }

        $this->PublisherIdentifier = array_merge($this->PublisherIdentifier, $PublisherIdentifier);
    }

    /**
     * Set PublisherIdentifier
     *
     * @param PublisherIdentifier $PublisherIdentifier
     * @return void
     */
    public function addPublisherIdentifier(PublisherIdentifier $PublisherIdentifier)
    {
        $this->PublisherIdentifier[] = $PublisherIdentifier;
    }

    /**
     * Set PublisherName
     *
     * @param string $PublisherName
     * @return void
     */
    public function setPublisherName(string $PublisherName)
    {
        $this->PublisherName = $PublisherName;
    }

    /**
     * Set Website
     *
     * @param Website $Website
     * @return void
     */
    public function setWebsite(Website $Website)
    {
        $this->Website = $Website;
    }

    /**
     * Get PublishingRole
     *
     * @return CodeList
     */
    public function getPublishingRole()
    {
        return $this->PublishingRole;
    }

    /**
     * Get PublisherIdentifier
     *
     * @return PublisherIdentifier
     */
    public function getPublisherIdentifier()
    {
        return $this->PublisherIdentifier;
    }

    /**
     * Get PublisherName
     *
     * @return string
     */
    public function getPublisherName()
    {
        return $this->PublisherName;
    }

    /**
     * Get Website
     *
     * @return Website
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * Get PublisherIdentifier
     *
     * @return PublisherIdentifier
     */
    public function removePublisherIdentifier()
    {
    }

}
