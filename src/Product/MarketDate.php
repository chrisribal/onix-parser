<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList163;
use Ribal\Onix\Date;

class MarketDate
{

    /**
     * MarketDateRole
     *
     * @var CodeList
     */
    protected $MarketDateRole;

    /**
     * Date
     *
     * @var \Ribal\Onix
     */
    protected $Date;

    /**
     * Set MarketDateRole
     *
     * @param CodeList163 $MarketDateRole
     * @return void
     */
    public function setMarketDateRole(CodeList163 $MarketDateRole)
    {
        $this->MarketDateRole = $MarketDateRole;
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
     * Get MarketDateRole
     *
     * @return CodeList
     */
    public function getMarketDateRole()
    {
        return $this->MarketDateRole;
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