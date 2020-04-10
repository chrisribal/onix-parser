<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList22;

class Language
{

    /**
     * LanguageRole
     *
     * @var CodeList
     */
    protected $LanguageRole;

    /**
     * LanguageCode
     *
     * @var string
     */
    protected $LanguageCode;

    /**
     * Set LanguageRole
     *
     * @param string $LanguageRole
     * @return void
     */
    public function setLanguageRole(CodeList22 $LanguageRole)
    {
        $this->LanguageRole = $LanguageRole;
    }

    /**
     * Set LanguageCode
     *
     * @param string $LanguageCode
     * @return void
     */
    public function setLanguageCode(string $LanguageCode)
    {
        $this->LanguageCode = $LanguageCode;
    }

    /**
     * Get LanguageRole
     *
     * @return CodeList
     */
    public function getLanguageRole()
    {
        return $this->LanguageRole;
    }

    /**
     * Get LanguageCode
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

}