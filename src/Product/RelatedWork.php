<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList164;

class RelatedWork
{

    /**
     * WorkRelationCode
     *
     * @var CodeList
     */
    protected $WorkRelationCode;

    /**
     * WorkIdentifier
     *
     * @var WorkIdentifier
     */
    protected $WorkIdentifier;

    /**
     * Set WorkRelationCode
     *
     * @param CodeList164 $WorkRelationCode
     * @return void
     */
    public function setWorkRelationCode(CodeList164 $WorkRelationCode)
    {
        $this->WorkRelationCode = $WorkRelationCode;
    }

    /**
     * Set WorkIdentifier
     *
     * @param WorkIdentifier $WorkIdentifier
     * @return void
     */
    public function setWorkIdentifier(WorkIdentifier $WorkIdentifier)
    {
        $this->WorkIdentifier = $WorkIdentifier;
    }

    /**
     * Get WorkRelationCode
     *
     * @return CodeList
     */
    public function getWorkRelationCode()
    {
        return $this->WorkRelationCode;
    }

    /**
     * WorkIdentifier
     *
     * @return WorkIdentifier
     */
    public function getWorkIdentifier()
    {
        return $this->WorkIdentifier;
    }

}