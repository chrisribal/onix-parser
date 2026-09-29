<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList173;
use Ribal\Onix\Date;

class PriceDate
{

    /**
     * PriceDateRole
     *
     * @var CodeList
     */
    protected $PriceDateRole;

    /**
     * Date
     *
     * @var Date
     */
    protected $Date;

    /**
     * Set PriceDateRole
     *
     * @param CodeList173 $PriceDateRole
     * @return void
     */
    public function setPriceDateRole(CodeList173 $PriceDateRole)
    {
        $this->PriceDateRole = $PriceDateRole;
    }

    /**
     * Set Date
     *
     * @param Date $Date
     * @return void
     */
    public function setDate(Date $Date)
    {
        $this->Date = $Date;
    }

    /**
     * Get PriceDateRole
     *
     * @return CodeList
     */
    public function getPriceDateRole()
    {
        return $this->PriceDateRole;
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
