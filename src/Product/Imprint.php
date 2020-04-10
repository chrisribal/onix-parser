<?php

namespace Ribal\Onix\Product;

class Imprint
{

    /**
     * ImprintName
     *
     * @var string
     */
    protected $ImprintName;

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