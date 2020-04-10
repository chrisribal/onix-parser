<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList46;
use Ribal\Onix\CodeList\CodeList64;
use Ribal\Onix\CodeList\CodeList91;

class PublishingDetail
{

    /**
     * CityOfPublication
     *
     * @var string
     */
    protected $CityOfPublication;

    /**
     * CountryOfPublication
     *
     * @var CodeList
     */
    protected $CountryOfPublication;

    /**
     * Publisher
     *
     * @var Publisher
     */
    protected $Publisher;

    /**
     * PublishingStatus
     *
     * @var CodeList
     */
    protected $PublishingStatus;

    /**
     * Array of PublishingDate
     *
     * @var array|PublishingDate
     */
    protected $PublishingDate = [];

    /**
     * Array of SalesRights
     *
     * @var array|SalesRights
     */
    protected $SalesRights = [];

    /**
     * ROWSalesRightsType
     *
     * @var CodeList
     */
    protected $ROWSalesRightsType;

    /**
     * Imprint
     *
     * @var Imprint
     */
    protected $Imprint;

    /**
     * Set CityOfPublication
     *
     * @param string $CityOfPublication
     * @return void
     */
    public function setCityOfPublication(string $CityOfPublication)
    {
        $this->CityOfPublication = $CityOfPublication;
    }

    /**
     * Set CountryOfPublication
     *
     * @param CodeList91 $CountryOfPublication
     * @return void
     */
    public function setCountryOfPublication(CodeList91 $CountryOfPublication)
    {
        $this->CountryOfPublication = $CountryOfPublication;
    }

    /**
     * Set Publisher
     *
     * @param Publisher $Publisher
     * @return void
     */
    public function setPublisher(Publisher $Publisher)
    {
        $this->Publisher = $Publisher;
    }

    /**
     * Set PublishingStatus
     *
     * @param CodeList64 $PublishingStatus
     * @return void
     */
    public function setPublishingStatus(CodeList64 $PublishingStatus)
    {
        $this->PublishingStatus = $PublishingStatus;
    }

    /**
     * Add new PublishingDate
     *
     * @param PublishingDate $PublishingDate
     * @return void
     */
    public function addPublishingDate(PublishingDate $PublishingDate)
    {
        $this->PublishingDate[] = $PublishingDate;
    }

    /**
     * Add SalesRights
     *
     * @param SalesRights $SalesRights
     * @return void
     */
    public function addSalesRight(SalesRights $SalesRights)
    {
        $this->SalesRights[] = $SalesRights;
    }

    /**
     * ROWSalesRightsType
     *
     * @param CodeList46 $ROWSalesRightsType
     * @return void
     */
    public function setROWSalesRightsType(CodeList46 $ROWSalesRightsType)
    {
        $this->ROWSalesRightsType = $ROWSalesRightsType;
    }

    /**
     * Set Imprint
     *
     * @param Imprint $Imprint
     * @return void
     */
    public function setImprint(Imprint $Imprint)
    {
        $this->Imprint = $Imprint;
    }

    /**
     * Get CityOfPublication
     *
     * @return string
     */
    public function getCityOfPublication()
    {
        return $this->CityOfPublication;
    }

    /**
     * Get CountryOfPublication
     *
     * @return CodeList
     */
    public function getCountryOfPublication()
    {
        return $this->CountryOfPublication;
    }

    /**
     * Get Publisher
     *
     * @return Publisher
     */
    public function getPublisher()
    {
        return $this->Publisher;
    }

    /**
     * Get PublishingStatus
     *
     * @return CodeList
     */
    public function getPublishingStatus()
    {
        return $this->PublishingStatus;
    }

    /**
     * Get PublishingDate
     *
     * @return array
     */
    public function getPublishingDate()
    {
        return $this->PublishingDate;
    }

    /**
     * Get SalesRights
     *
     * @return array
     */
    public function getSalesRights()
    {
        return $this->SalesRights;
    }

    /**
     * Get ROWSalesRightsType
     *
     * @return CodeList
     */
    public function getROWSalesRightsType()
    {
        return $this->ROWSalesRightsType;
    }

    /**
     * Get Imprint
     *
     * @return Imprint
     */
    public function getImprint()
    {
        return $this->Imprint;
    }

    /**
     * Remove new PublishingDate
     *
     * @param PublishingDate $PublishingDate
     * @return void
     */
    public function removePublishingDate(PublishingDate $PublishingDate)
    {
    }

    /**
     * Remove SalesRights
     *
     * @param SalesRights $SalesRights
     * @return void
     */
    public function removeSalesRight(SalesRights $SalesRights)
    {
    }

}
