<?php

namespace Ribal\Onix\Product;

class ProductSupply
{

    /**
     * Market
     *
     * @var Market
     */
    protected $Market;

    /**
     * MarketPublishingDetail
     *
     * @var MarketPublishingDetail
     */
    protected $MarketPublishingDetail;

    /**
     * SupplyDetail
     *
     * @var SupplyDetail
     */
    protected $SupplyDetail;

    /**
     * Set Market
     *
     * @param Market $Market
     * @return void
     */
    public function setMarket(Market $Market)
    {
        $this->Market = $Market;
    }

    /**
     * Set MarketPublishingDetail
     *
     * @param MarketPublishingDetail $MarketPublishingDetail
     * @return void
     */
    public function setMarketPublishingDetail(MarketPublishingDetail $MarketPublishingDetail)
    {
        $this->MarketPublishingDetail = $MarketPublishingDetail;
    }

    /**
     * Set SupplyDetail
     *
     * @param SupplyDetail $SupplyDetail
     * @return void
     */
    public function setSupplyDetail(SupplyDetail $SupplyDetail)
    {
        $this->SupplyDetail = $SupplyDetail;
    }

    /**
     * Get Market
     *
     * @return Market
     */
    public function getMarket()
    {
        return $this->Market;
    }

    /**
     * Get MarketPublishingDetail
     *
     * @return MarketPublishingDetail
     */
    public function getMarketPublishingDetail()
    {
        return $this->MarketPublishingDetail;
    }

    /**
     * Get SupplyDetail
     *
     * @return SupplyDetail
     */
    public function getSupplyDetail()
    {
        return $this->SupplyDetail;
    }

}