<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList148;

class Collection
{

    /**
     * CollectionType
     *
     * @var CodeList
     */
    protected $CollectionType;

    /**
     * TitleDetail
     *
     * @var TitleDetail
     */
    protected $TitleDetail;

    /**
     * Set CollectionType
     *
     * @param string $CollectionType
     * @return void
     */
    public function setCollectionType(CodeList148 $CollectionType)
    {
        $this->CollectionType = $CollectionType;
    }

    /**
     * Set TitleDetail
     *
     * @param TitleDetail $TitleDetail
     * @return void
     */
    public function setTitleDetail(TitleDetail $TitleDetail)
    {
        $this->TitleDetail = $TitleDetail;
    }

    /**
     * Get CollectionType
     *
     * @return CodeList
     */
    public function getCollectionType()
    {
        return $this->CollectionType;
    }

    /**
     * Get TitleDetail
     *
     * @return TitleDetail
     */
    public function getTitleDetail()
    {
        return $this->TitleDetail;
    }

}