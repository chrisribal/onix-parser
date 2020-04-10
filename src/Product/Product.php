<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList1;
use Ribal\Onix\CodeList\CodeList3;

class Product
{

    /**
     * RecordReference
     *
     * @var string
     */
    protected $RecordReference;

    /**
     * NotificationType (Early Notification by default)
     *
     * @var CodeList
     */
    protected $NotificationType;

    /**
     * RecordSourceType
     *
     * @var string
     */
    protected $RecordSourceType;

    /**
     * RecordSourceIdentifier
     *
     * @var RecordSourceIdentifier
     */
    protected $RecordSourceIdentifier;

    /**
     * RecordSourceName
     *
     * @var string
     */
    protected $RecordSourceName;

    /**
     * ProductItentifiers
     *
     * @var array|ProductItentifier
     */
    protected $ProductItentifier = [];

    /**
     * DescriptiveDetail
     *
     * @var DescriptiveDetail
     */
    protected $DescriptiveDetail;

    /**
     * CollateralDetail
     *
     * @var CollateralDetail
     */
    protected $CollateralDetail;

    /**
     * PublishingDetail
     *
     * @var PublishingDetail
     */
    protected $PublishingDetail;

    /**
     * RelatedMaterial
     *
     * @var RelatedMaterial
     */
    protected $RelatedMaterial;

    /**
     * ProductSupply
     *
     * @var ProductSupply
     */
    protected $ProductSupply;

    /**
     * Set the Products record reference
     *
     * @param string $value
     * @return void
     */
    public function setRecordReference(string $value)
    {
        $this->RecordReference = $value;
    }

    /**
     * Set the type of notification
     *
     * @param Code $NotificationType
     * @return void
     */
    public function setNotificationType(CodeList1 $NotificationType)
    {
        $this->NotificationType = $NotificationType;
    }

    /**
     * Set RecordSourceType
     *
     * @param string $RecordSourceType
     * @return void
     */
    public function setRecordSourceType(CodeList3 $RecordSourceType)
    {
        $this->RecordSourceType = $RecordSourceType;
    }

    /**
     * Set RecordSourceIdentifier
     *
     * @param RecordSourceIdentifier $RecordSourceIdentifier
     * @return void
     */
    public function setRecordSourceIdentifier(RecordSourceIdentifier $RecordSourceIdentifier)
    {
        $this->RecordSourceIdentifier = $RecordSourceIdentifier;
    }

    /**
     * Set RecordSourceName
     *
     * @param string $RecordSourceName
     * @return void
     */
    public function setRecordSourceName(string $RecordSourceName)
    {
        $this->RecordSourceName = $RecordSourceName;
    }

    /**
     * Add a new Product Identifier
     *
     * @param ProductIdentifier $productIdentifier
     * @return void
     */
    public function addProductIdentifier(ProductIdentifier $productIdentifier)
    {
        $this->ProductItentifier[] = $productIdentifier;
    }

    /**
     * Remove Product Identifier
     *
     * @param ProductIdentifier $productIdentifier
     * @return void
     */
    public function removeProductIdentifier(ProductIdentifier $productIdentifier)
    {
        $this->ProductItentifier[] = $productIdentifier;
    }

    /**
     * Set Descriptive Details
     *
     * @param DescriptiveDetail $descriptiveDetail
     * @return void
     */
    public function setDescriptiveDetail(DescriptiveDetail $descriptiveDetail)
    {
        $this->DescriptiveDetail = $descriptiveDetail;
    }

    /**
     * Set CollateralDetail
     *
     * @param CollateralDetail $CollateralDetail
     * @return void
     */
    public function setCollateralDetail(CollateralDetail $CollateralDetail)
    {
        $this->CollateralDetail = $CollateralDetail;
    }

    /**
     * Set PublishingDetail
     *
     * @param PublishingDetail $PublishingDetail
     * @return void
     */
    public function setPublishingDetail(PublishingDetail $PublishingDetail)
    {
        $this->PublishingDetail = $PublishingDetail;
    }

    /**
     * Set RelatedMaterial
     *
     * @param RelatedMaterial $RelatedMaterial
     * @return void
     */
    public function setRelatedMaterial(RelatedMaterial $RelatedMaterial)
    {
        $this->RelatedMaterial = $RelatedMaterial;
    }

    /**
     * Set ProductSupply
     *
     * @param ProductSupply $ProductSupply
     * @return void
     */
    public function setProductSupply(ProductSupply $ProductSupply)
    {
        $this->ProductSupply = $ProductSupply;
    }

    /**
     * Get RecordReference
     *
     * @return string
     */
    public function getRecordReference()
    {
        return $this->RecordReference;
    }

    /**
     * Get the Notification Type
     *
     * @return \Ribal\Onix\Code
     */
    public function getNotificationType()
    {
        return $this->NotificationType;
    }

    /**
     * Get DescriptiveDetail
     *
     * @return DescriptiveDetail
     */
    public function getDescriptiveDetail()
    {
        return $this->DescriptiveDetail;
    }

    /**
     * Get CollateralDetail
     *
     * @return CollateralDetail
     */
    public function getCollateralDetail()
    {
        return $this->CollateralDetail;
    }

    /**
     * Get ProductIdentifiers
     *
     * @return array
     */
    public function getProductIdentifier()
    {
        return $this->ProductItentifier;
    }

    /**
     * Get PublishingDetail
     *
     * @return PublishingDetail
     */
    public function getPublishingDetail()
    {
        return $this->PublishingDetail;
    }

    /**
     * Get RelatedMaterial
     *
     * @return RelatedMaterial
     */
    public function getRelatedMaterial()
    {
        return $this->RelatedMaterial;
    }

    /**
     * Get ProductSupply
     *
     * @return ProductSupply
     */
    public function getProductSupply()
    {
        return $this->ProductSupply;
    }

    /**
     * Get RecordSourceIdentifier
     *
     * @return RecordSourceIdentifier
     */
    public function getRecordSourceIdentifier()
    {
        return $this->RecordSourceIdentifier;
    }

    /**
     * Get RecordSourceName
     *
     * @return string
     */
    public function getRecordSourceName()
    {
        return $this->RecordSourceName;
    }

}