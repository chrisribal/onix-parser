<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList22;
use Ribal\Onix\CodeList\CodeList74;

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
     * @var CodeList
     */
    protected $LanguageCode;

    /**
     * Set LanguageRole
     *
     * @param CodeList $LanguageRole
     * @return void
     */
    public function setLanguageRole(CodeList22 $LanguageRole)
    {
        $this->LanguageRole = $LanguageRole;
    }

    /**
     * Set LanguageCode
     *
     * @param CodeList $LanguageCode
     * @return void
     */
    public function setLanguageCode(CodeList74 $LanguageCode)
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
     * @return CodeList
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

}
