<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList155;
use Ribal\Onix\Date;

class ContentDate
{

    /**
     * ContentDateRole
     *
     * @var CodeList
     */
    protected $ContentDateRole;

    /**
     * Date
     *
     * @var \DateTime
     */
    protected $Date;

    /**
     * Set ContentDateRole
     *
     * @param CodeList155 $ContentDateRole
     * @return void
     */
    public function setContentDateRole(CodeList155 $ContentDateRole)
    {
        $this->ContentDateRole = $ContentDateRole;
    }

    /**
     * Set Date
     *
     * @param string $Date
     * @return void
     */
    public function setDate(Date $Date)
    {
        $this->Date = $Date;
    }

    /**
     * Get ContentDateRole
     *
     * @return CodeList
     */
    public function getContentDateRole()
    {
        return $this->ContentDateRole;
    }

    /**
     * Get Date
     *
     * @return Date
     */
    public function getDate()
    {
        return $this->Date;
    }

}