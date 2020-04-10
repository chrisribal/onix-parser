<?php

namespace Ribal\Onix\Product;

class RelatedMaterial
{

    /**
     * Array of RelatedWork
     *
     * @var array|RelatedWork
     */
    protected $RelatedWork = [];

    /**
     * Array of RelatedProduct
     *
     * @var array|RelatedProduct
     */
    protected $RelatedProduct = [];

    /**
     * Add new RelatedWork
     *
     * @param RelatedWork $RelatedWork
     * @return void
     */
    public function addRelatedWork(RelatedWork $RelatedWork)
    {
        $this->RelatedWork[] = $RelatedWork;
    }

    /**
     * Set RelatedProduct
     *
     * @param RelatedProduct $RelatedProduct
     * @return void
     */
    public function addRelatedProduct(RelatedProduct $RelatedProduct)
    {
        $this->RelatedProduct[] = $RelatedProduct;
    }

    /**
     * Get RelatedWork
     *
     * @return array
     */
    public function getRelatedWork()
    {
        return $this->RelatedWork;
    }

    /**
     * Get RelatedProduct
     *
     * @return RelatedProduct
     */
    public function getRelatedProduct()
    {
        return $this->RelatedProduct;
    }

    /**
     * Remove RelatedWork
     *
     * @param RelatedWork $RelatedWork
     * @return void
     */
    public function removeRelatedWork(RelatedWork $RelatedWork)
    {
    }

    public function removeRelatedProduct(RelatedProduct $RelatedProduct)
    {
    }

}
