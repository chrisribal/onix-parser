<?php

namespace Ribal\Onix\Message;

use Ribal\Onix\Message\Header as Header;
use Ribal\Onix\Product\Product;
use Doctrine\Common\Annotations\Annotation\Attribute;

class Message
{

    /**
     * Message Header
     *
     * @var Header $header
     */
    protected $Header;

    /**
     * Message Products
     *
     * @var Product $Product[]
     */
    protected $Product = [];

    /**
     * Set the Header
     *
     * @param Header $header
     * @return void
     */
    public function setHeader(Header $header)
    {
        $this->Header = $header;
    }

    /**
     * Undocumented function
     *
     * @param Product $product
     * @return void
     */
    public function addProduct(Product $product)
    {
        $this->Product[] = $product;
    }

    /**
     * Removes a Product from collection
     *
     * @param Product $product
     * @return void
     */
    public function removeProduct(Product $product)
    {
        
    }

    /**
     * Get the Header
     *
     * @return Header
     */
    public function getHeader()
    {
        return $this->Header;
    }

    /**
     * Get the products
     *
     * @return array
     */
    public function getProduct()
    {
        return $this->Product;
    }

}
