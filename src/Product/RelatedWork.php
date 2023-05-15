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
     * Array of WorkIdentifiers
     *
     * @var arrayWorkIdentifier
     */
    protected $WorkIdentifier = [];

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
     * Add a new WorkIdentifier
     *
     * @param WorkIdentifier $WorkIdentifier
     * @return void
     */
    public function addWorkIdentifier(WorkIdentifier $WorkIdentifier)
    {
        $this->WorkIdentifier[] = $WorkIdentifier;
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
     * @return array
     */
    public function getWorkIdentifier()
    {
        return $this->WorkIdentifier;
    }

     /**
     * Remove WorkIdentifier
     *
     * @param WorkIdentifier $WorkIdentifier
     * @return void
     */
    public function removeWorkIdentifier(WorkIdentifier $WorkIdentifier)
    {
    }

}