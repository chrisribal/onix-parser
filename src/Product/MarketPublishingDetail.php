<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList68;

class MarketPublishingDetail
{

    /**
     * MarketPublishingStatus
     *
     * @var CodeList
     */
    protected $MarketPublishingStatus;

    /**
     * MarketDate
     *
     * @var MarketDate
     */
    protected $MarketDate;

    /**
     * Set MarketPublishingStatus
     *
     * @param CodeList68 $MarketPublishingStatus
     * @return void
     */
    public function setMarketPublishingStatus(CodeList68 $MarketPublishingStatus)
    {
        $this->MarketPublishingStatus = $MarketPublishingStatus;
    }

    /**
     * Set MarketDate
     *
     * @param MarketDate $MarketDate
     * @return void
     */
    public function setMarketDate(MarketDate $MarketDate)
    {
        $this->MarketDate = $MarketDate;
    }

    /**
     * Get MarketPublishingStatus
     *
     * @return CodeList
     */
    public function getMarketPublishingStatus()
    {
        return $this->MarketPublishingStatus;
    }

    /**
     * Get MarketDate
     *
     * @return MarketDate
     */
    public function getMarketDate()
    {
        return $this->MarketDate;
    }

}