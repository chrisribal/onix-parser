<?php

namespace Ribal\Onix\Product;

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

    public function removeProductRelationCode(CodeList51 $ProductRelationCode)
    {
    }

    public function removeProductIdentifier(ProductIdentifier $ProductIdentifier)
    {
    }

}
