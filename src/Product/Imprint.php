<?php

namespace Ribal\Onix\Product;

class Imprint
{

    /**
     * Array of ImprintIdentifiers
     *
     * @var ImprintIdentifier[]
     */
    protected $ImprintIdentifier = [];

    /**
     * ImprintName
     *
     * @var string
     */
    protected $ImprintName;

    /**
     * Add ImprintIdentifier
     *
     * @param ImprintIdentifier $ImprintIdentifier
     * @return void
     */
    public function addImprintIdentifier(ImprintIdentifier $ImprintIdentifier)
    {
        $this->ImprintIdentifier[] = $ImprintIdentifier;
    }

    /**
     * Remove ImprintIdentifier
     *
     * @param ImprintIdentifier $ImprintIdentifier
     * @return void
     */
    public function removeImprintIdentifier(ImprintIdentifier $ImprintIdentifier)
    {
        // void
    }

    /**
     * Get ImprintIdentifiers
     *
     * @return ImprintIdentifier[]
     */
    public function getImprintIdentifier()
    {
        return $this->ImprintIdentifier;
    }

    /**
     * Set ImprintName
     *
     * @param string $ImprintName
     * @return void
     */
    public function setImprintName(string $ImprintName)
    {
        $this->ImprintName = $ImprintName;
    }

    /**
     * Get ImprintName
     *
     * @return string
     */
    public function getImprintName()
    {
        return $this->ImprintName;
    }

}