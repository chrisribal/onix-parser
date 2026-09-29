<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList150;
use Ribal\Onix\CodeList\CodeList51;

class RelatedProduct
{

    /**
     * Array of Product Relation Codes
     *
     * @var array
     */
    protected $ProductRelationCode = [];

    /**
     * Array of ProductIdentifiers
     *
     * @var array|ProductIdentifier
     */
    protected $ProductIdentifier = [];

    /**
     * ProductForm of the related product
     *
     * @var CodeList150
     */
    protected $ProductForm;

    /**
     * Set ProductRelationCode
     *
     * @param CodeList51 $ProductRelationCode
     * @return void
     */
    public function addProductRelationCode(CodeList51 $ProductRelationCode)
    {
        $this->ProductRelationCode[] = $ProductRelationCode;
    }

    /**
     * Set ProductIdentifier
     *
     * @param ProductIdentifier $ProductIdentifier
     * @return void
     */
    public function addProductIdentifier(ProductIdentifier $ProductIdentifier)
    {
        $this->ProductIdentifier[] = $ProductIdentifier;
    }

    /**
     * Get ProductRelationCodes
     *
     * @return array
     */
    public function getProductRelationCode()
    {
        return $this->ProductRelationCode;
    }

    /**
     * Get ProductIdentifiers
     *
     * @return array
     */
    public function getProductIdentifier()
    {
        return $this->ProductIdentifier;
    }

    /**
     * Set ProductForm
     *
     * @param CodeList150 $ProductForm
     * @return void
     */
    public function setProductForm(CodeList150 $ProductForm)
    {
        $this->ProductForm = $ProductForm;
    }

    /**
     * Get ProductForm
     *
     * @return CodeList150|null
     */
    public function getProductForm()
    {
        return $this->ProductForm;
    }

    public function removeProductRelationCode(CodeList51 $ProductRelationCode)
    {
    }

    public function removeProductIdentifier(ProductIdentifier $ProductIdentifier)
    {
    }

}
