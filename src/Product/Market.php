<?php

namespace Ribal\Onix\Product;

class Market
{

    /**
     * Territory
     *
     * @var Territory
     */
    protected $Territory;

    /**
     * Set Territory
     *
     * @param Territory $Territory
     * @return void
     */
    public function setTerritory(Territory $Territory)
    {
        $this->Territory = $Territory;
    }

    /**
     * Get Territory
     *
     * @return Territory
     */
    public function getTerritory()
    {
        return $this->Territory;
    }

}
