<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList27;

class Subject
{

    /**
     * MainSubject
     *
     * @var boolean
     */
    protected $MainSubject = false;

    /**
     * SubjectSchemeIdentifier
     *
     * @var CodeList
     */
    protected $SubjectSchemeIdentifier;

    /**
     * SubjectSchemeName
     *
     * @var string
     */
    protected $SubjectSchemeName;

    /**
     * SubjectSchemeVersion
     *
     * @var string
     */
    protected $SubjectSchemeVersion;

    /**
     * SubjectCode
     *
     * @var string
     */
    protected $SubjectCode;

    /**
     * SubjectHeadingText
     *
     * @var string
     */
    protected $SubjectHeadingText;

    /**
     * Set as MainSubject
     *
     * @return void
     */
    public function setMainSubject(string $MainSubject)
    {
        $this->MainSubject = true;
    }

    /**
     * Set SubjectSchemeIdentifier
     *
     * @param string $SubjectSchemeIdentifier
     * @return void
     */
    public function setSubjectSchemeIdentifier(CodeList27 $SubjectSchemeIdentifier)
    {
        $this->SubjectSchemeIdentifier = $SubjectSchemeIdentifier;
    }

    /**
     * Set SubjectSchemeVersion
     *
     * @param string $SubjectSchemeVersion
     * @return void
     */
    public function setSubjectSchemeVersion(string $SubjectSchemeVersion)
    {
        $this->SubjectSchemeVersion = $SubjectSchemeVersion;
    }

    /**
     * Set SubjectCode
     *
     * @param string $SubjectCode
     * @return void
     */
    public function setSubjectCode(string $SubjectCode)
    {
        $this->SubjectCode = $SubjectCode;
    }

    /**
     * Set SubjectHeadingText
     *
     * @param string $SubjectHeadingText
     * @return void
     */
    public function setSubjectHeadingText(string $SubjectHeadingText)
    {
        $this->SubjectHeadingText = $SubjectHeadingText;
    }

    /**
     * Set SubjectSchemeName
     *
     * @return string
     */
    public function setSubjectSchemeName(string $SubjectSchemeName)
    {
        $this->SubjectSchemeName = $SubjectSchemeName;
    }

    /**
     * Get MainSubject
     *
     * @return boolean
     */
    public function getMainSubject()
    {
        return $this->MainSubject;
    }

    /**
     * Get SubjectSchemeIdentifier
     *
     * @return CodeList
     */
    public function getSubjectSchemeIdentifier()
    {
        return $this->SubjectSchemeIdentifier;
    }

    /**
     * Get SubjectSchemeVersion
     *
     * @return string
     */
    public function getSubjectSchemeVersion()
    {
        return $this->SubjectSchemeVersion;
    }

    /**
     * Get SubjectCode
     *
     * @return string
     */
    public function getSubjectCode()
    {
        return $this->SubjectCode;
    }

    /**
     * Get SubjectHeadingText
     *
     * @return string
     */
    public function getSubjectHeadingText()
    {
        return $this->SubjectHeadingText;
    }

    /**
     * @return string
     */
    public function getSubjectSchemeName()
    {
        return $this->SubjectSchemeName;
    }
}
