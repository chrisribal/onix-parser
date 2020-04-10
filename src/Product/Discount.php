<?php

namespace Ribal\Onix\Product;

class Discount
{

    /**
     * DiscountPercent
     *
     * @var float
     */
    protected $DiscountPercent;

    /**
     * Set DiscountPercent
     *
     * @param float $DiscountPercent
     * @return void
     */
    public function setDiscountPercent(string $DiscountPercent)
    {
        $this->DiscountPercent = (float) $DiscountPercent;
    }

    /**
     * Get DiscountPercent
     *
     * @return float
     */
    public function getDiscountPercent()
    {
        return $this->DiscountPercent;
    }

}
