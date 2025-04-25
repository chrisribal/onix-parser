<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList46;
use Ribal\Onix\CodeList\CodeList64;
use Ribal\Onix\CodeList\CodeList91;

class PublishingDetail
{

    /**
     * Imprint
     *
     * @var Imprint
     */
    protected $Imprint;

    /**
     * Publisher
     *
     * @var Publisher
     */
    protected $Publisher;

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
     * Product Contacts
     *
     * @var ProductContact[]
     */
    protected array $ProductContact = [];

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
     * Get Imprint
     *
     * @return Imprint
     */
    public function getImprint()
    {
        return $this->Imprint;
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
     * Get Publisher
     *
     * @return Publisher
     */
    public function getPublisher()
    {
        return $this->Publisher;
    }

    /**
     * Set CityOfPublication
     *
     * @param string|array $CityOfPublication
     * @return void
     */
    public function setCityOfPublication($CityOfPublication)
    {
        $this->CityOfPublication = $CityOfPublication;
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
     * Get CountryOfPublication
     *
     * @return CodeList
     */
    public function getCountryOfPublication()
    {
        return $this->CountryOfPublication;
    }

    /**
     * Add new ProductContact
     *
     * @param ProductContact $ProductContact
     * @return void
     */
    public function addProductContact(ProductContact $ProductContact): void
    {
        $this->ProductContact[] = $ProductContact;
    }

    /**
     * Get ProductContact
     *
     * @return array
     */
    public function getProductContact(): array
    {
        return $this->ProductContact;
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
     * Get PublishingStatus
     *
     * @return CodeList
     */
    public function getPublishingStatus()
    {
        return $this->PublishingStatus;
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
     * Get PublishingDate
     *
     * @return array
     */
    public function getPublishingDate()
    {
        return $this->PublishingDate;
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
     * Get SalesRights
     *
     * @return array
     */
    public function getSalesRights()
    {
        return $this->SalesRights;
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
     * Get ROWSalesRightsType
     *
     * @return CodeList
     */
    public function getROWSalesRightsType()
    {
        return $this->ROWSalesRightsType;
    }

    /**
     * Remove new PublishingDate
     *
     * @param PublishingDate $PublishingDate
     * @return void
     */
    public function removePublishingDate(PublishingDate $PublishingDate) {}

    /**
     * Remove SalesRights
     *
     * @param SalesRights $SalesRights
     * @return void
     */
    public function removeSalesRight(SalesRights $SalesRights) {}
}
