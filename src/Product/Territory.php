<?php

namespace Ribal\Onix\Product;

class Territory
{

    /**
     * CountriesIncluded
     *
     * @var array
     */
    protected $CountriesIncluded = [];

    /**
     * CountriesExcluded
     *
     * @var array
     */
    protected $CountriesExcluded = [];

    /**
     * RegionsIncluded
     *
     * @var array
     */
    protected $RegionsIncluded = [];

    /**
     * RegionsExcluded
     *
     * @var array
     */
    protected $RegionsExcluded = [];

    /**
     * Set CountriesIncluded
     *
     * @param string $CountriesIncluded
     * @return void
     */
    public function setCountriesIncluded(string $CountriesIncluded)
    {
        $this->CountriesIncluded = explode(" ", $CountriesIncluded);
    }

    /**
     * Set CountriesExcluded
     *
     * @param string $CountriesExcluded
     * @return void
     */
    public function setCountriesExcluded(string $CountriesExcluded)
    {
        $this->CountriesExcluded = explode(" ", $CountriesExcluded);
    }

    /**
     * Set RegionsIncluded
     *
     * @param string $RegionsIncluded
     * @return void
     */
    public function setRegionsIncluded(string $RegionsIncluded)
    {
        $this->RegionsIncluded = explode(" ", $RegionsIncluded);
    }

    /**
     * Set RegionsExcluded
     *
     * @param string $RegionsExcluded
     * @return void
     */
    public function setRegionsExcluded(string $RegionsExcluded)
    {
        $this->RegionsExcluded = explode(" ", $RegionsExcluded);
    }

    /**
     * Get CountriesIncluded
     *
     * @return array
     */
    public function getCountriesIncluded()
    {
        return $this->CountriesIncluded;
    }

    /**
     * Get CountriesExcluded
     *
     * @return array
     */
    public function getCountriesExcluded()
    {
        return $this->CountriesExcluded;
    }

    /**
     * RegionsIncluded
     *
     * @return array
     */
    public function getRegionsIncluded()
    {
        return $this->RegionsIncluded;
    }

    /**
     * Get RegionsExcluded
     *
     * @return array
     */
    public function getRegionsExcluded()
    {
        return $this->RegionsExcluded;
    }

}
