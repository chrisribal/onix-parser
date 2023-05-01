<?php

namespace Ribal\Onix\Product;

class Stock
{
    /**
     * LocationName
     *
     * @var string
     */
    protected $LocationName;

    /**
     * OnHand
     *
     * @var int
     */
    protected $OnHand;

    /**
     * Set LocationName
     *
     * @param string $LocationName
     * @return void
     */
    public function setLocationName(string $LocationName)
    {
        $this->LocationName = $LocationName;
    }

    /**
     * Get PublisherName
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->LocationName;
    }

    /**
     * Set OnHand
     *
     * @param string $OnHand
     * @return void
     */
    public function setOnHand(int $OnHand)
    {
        $this->OnHand = $OnHand;
    }

    /**
     * Get OnHand
     *
     * @return string
     */
    public function getOnHand()
    {
        return $this->OnHand;
    }
}
