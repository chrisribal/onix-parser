<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList2;
use Ribal\Onix\CodeList\CodeList81;
use Ribal\Onix\CodeList\CodeList91;
use Ribal\Onix\CodeList\CodeList150;
use Ribal\Onix\CodeList\CodeList175;

class DescriptiveDetail
{

    /**
     * ProductComposition
     *
     * @var CodeListList
     */
    protected $ProductComposition;

    /**
     * ProductForm
     *
     * @var CodeListList
     */
    protected $ProductForm;

    /**
     * ProductFormDetail
     *
     * @var CodeList[]
     */
    protected $ProductFormDetail = [];

    /**
     * ProductFormFeature
     *
     * @var array|ProductFormFeature
     */
    protected $ProductFormFeature = [];

    /**
     * ProductContentType
     *
     * @var ProductContentType[]
     */
    protected $ProductContentType = [];

    /**
     * Measure
     *
     * @var array|Measure
     */
    protected $Measure = [];

    /**
     * CountryOfManufacture
     *
     * @var CodeList
     */
    protected $CountryOfManufacture;

    /**
     * TitleDetail
     *
     * @var array|TitleDetail
     */
    protected $TitleDetail = [];

    /**
     * Array of Contributors
     *
     * @var array|Contributor
     */
    protected $Contributor = [];

    /**
     * ContributorStatement
     *
     * @var string
     */
    protected $ContributorStatement;

    /**
     * EditionNumber
     *
     * @var int
     */
    protected $EditionNumber;

    /**
     * EditionStatement
     *
     * @var string
     */
    protected $EditionStatement;

    /**
     * Array of Extents
     *
     * @var array|Extent
     */
    protected $Extent = [];

    /**
     * Array of Language
     *
     * @var array|Language
     */
    protected $Language = [];

    /**
     * Array Subject
     *
     * @var array
     */
    protected $Subject = [];

    /**
     * ProductClassification
     *
     * @var ProductClassification
     */
    protected $ProductClassification;

    /**
     * Array of Collections
     *
     * @var Collection[]
     */
    protected $Collection = [];

    /**
     * Array of Audiences
     *
     * @var array|Audience
     */
    protected $Audience = [];

    /**
     * Set ProductComposition
     *
     * @param string $ProductComposition
     * @return void
     */
    public function setProductComposition(CodeList2 $ProductComposition)
    {
        $this->ProductComposition = $ProductComposition;
    }

    /**
     * Set Product Form
     *
     * @param string $ProductForm
     * @return void
     */
    public function setProductForm(CodeList150 $ProductForm)
    {
        $this->ProductForm = $ProductForm;
    }

    /**
     * Set ProductFormDetail
     *
     * @param CodeList $ProductFormDetail
     * @return void
     */
    public function addProductFormDetail(CodeList175 $ProductFormDetail)
    {
        $this->ProductFormDetail[] = $ProductFormDetail;
    }

    /**
     * Add ProductFormFeature
     *
     * @param ProductFormFeature $ProductFormFeature
     * @return void
     */
    public function addProductFormFeature(ProductFormFeature $ProductFormFeature)
    {
        $this->ProductFormFeature[] = $ProductFormFeature;
    }

    /**
     * PrimaryContentType
     *
     * @param string $ProductContentType
     * @return void
     */
    /*public function addProductContentType(CodeList81 $ProductContentType)
    {
        $this->ProductContentType[] = $ProductContentType;
    }*/

    /**
     * PrimaryContentType
     *
     * @param string $ProductContentType
     * @return void
     */
    public function addProductContentType(CodeList81 $ProductContentType)
    {
        $this->ProductContentType[] = $ProductContentType;
    }

    /**
     * Add Measure
     *
     * @param Measure $Measure
     * @return void
     */
    public function addMeasure(Measure $Measure)
    {
        $this->Measure[] = $Measure;
    }

    /**
     * Remove Measure
     *
     * @param Measure $Measure
     * @return void
     */
    public function removeMeasure(Measure $Measure)
    {
        
    }

    /**
     * Set CountryOfManufacture
     *
     * @param string $CountryOfManufacture
     * @return void
     */
    public function setCountryOfManufacture(CodeList91 $CountryOfManufacture)
    {
        $this->CountryOfManufacture = $CountryOfManufacture;
    }

    /**
     * Add a TitleDetail
     *
     * @param TitleDetail $TitleDetail
     * @return void
     */
    public function addTitleDetail(TitleDetail $TitleDetail)
    {
        $this->TitleDetail[] = $TitleDetail;
    }

    /**
     * Remove a TitleDetail
     *
     * @param TitleDetail $TitleDetail
     * @return void
     */
    public function removeTitleDetail(TitleDetail $TitleDetail)
    {
    }

    /**
     * Add Contributor
     *
     * @param Contributor $Contributor
     * @return void
     */
    public function addContributor(Contributor $Contributor)
    {
        $this->Contributor[] = $Contributor;
    }

    /**
     * Remove Contributor
     *
     * @param Contributor $Contributor
     * @return void
     */
    public function removeContributor(Contributor $Contributor)
    {
    }

    /**
     * Set ContributorStatement
     *
     * @param string $ContributorStatement
     * @return void
     */
    public function setContributorStatement(string $ContributorStatement)
    {
        $this->ContributorStatement = $ContributorStatement;
    }

    /**
     * EditionNumber
     *
     * @param integer $EditionNumber
     * @return void
     */
    public function setEditionNumber(string $EditionNumber)
    {
        $this->EditionNumber = $EditionNumber;
    }

    /**
     * @return string
     */
    public function getEditionStatement(): string
    {
        return $this->EditionStatement;
    }

    /**
     * @param string $EditionStatement
     */
    public function setEditionStatement(string $EditionStatement)
    {
        $this->EditionStatement = $EditionStatement;
    }

    /**
     * Add new Extent
     *
     * @param Extent $Extent
     * @return void
     */
    public function addExtent(Extent $Extent)
    {
        $this->Extent[] = $Extent;
    }

    /**
     * Add Subject
     *
     * @param Subject $Subject
     * @return void
     */
    public function addSubject(Subject $Subject)
    {
        $this->Subject[] = $Subject;
    }

    /**
     * Set ProductClassification
     *
     * @param ProductClassification $ProductClassification
     * @return void
     */
    public function setProductClassification(ProductClassification $ProductClassification)
    {
        $this->ProductClassification = $ProductClassification;
    }

    /**
     * Add Collection
     *
     * @param Collection $Collection
     * @return void
     */
    public function addCollection(Collection $Collection)
    {
        $this->Collection[] = $Collection;
    }
    
    /**
     * Remove Collection
     *
     * @param Collection $Collection
     * @return void
     */
    public function removeCollection(Collection $Collection)
    {
        // void
    }

    /**
     * Add Audience
     *
     * @param Audience $Audience
     * @return void
     */
    public function addAudience(Audience $Audience)
    {
        $this->Audience[] = $Audience;
    }

    /**
     * Add Language
     *
     * @param Language $Language
     * @return void
     */
    public function addLanguage(Language $Language)
    {
        $this->Language[] = $Language;
    }

    /**
     * Get ProductComposition
     *
     * @return CodeList
     */
    public function getProductComposition()
    {
        return $this->ProductComposition;
    }

    /**
     * Get Product Form
     *
     * @return CodeList
     */
    public function getProductForm()
    {
        return $this->ProductForm;
    }

    /**
     * Get ProductFormDetail
     *
     * @return array
     */
    public function getProductFormDetail()
    {
        return $this->ProductFormDetail;
    }
    
    /**
     * Remove ProductFormDetail
     *
     * @return void
     */
    public function removeProductFormDetail(CodeList175 $ProductFormDetail)
    {

    }

    /**
     * ProductFormFeatures
     *
     * @return array
     */
    public function getProductFormFeature()
    {
        return $this->ProductFormFeature;
    }

    /**
     * Get Measure
     *
     * @return array
     */
    public function getMeasure()
    {
        return $this->Measure;
    }
    
    /**
     * Get all Measures
     *
     * @return array
     */
    public function getMeasures()
    {
    	return $this->Measure;
    }

    /**
     * Get CountryOfManufacture
     *
     * @return CodeList
     */
    public function getCountryOfManufacture()
    {
        return $this->CountryOfManufacture;
    }

    /**
     * Get all Contributors
     *
     * @return void
     */
    public function getContributor()
    {
        return $this->Contributor;
    }

    /**
     * Get ContributorStatement
     *
     * @return string
     */
    public function getContributorStatement()
    {
        return $this->ContributorStatement;
    }

    /**
     * Get Title detail
     *
     * @return TitleDetail
     */
    public function getTitleDetail()
    {
        return $this->TitleDetail;
    }

    /**
     * Get EditionNumber
     *
     * @return int
     */
    public function getEditionNumber()
    {
        return $this->EditionNumber;
    }

    /**
     * Get Extent
     *
     * @return array
     */
    public function getExtent()
    {
        return $this->Extent;
    }

    /**
     * Remove Extent
     *
     * @return array
     */
    public function removeExtent(Extent $extent)
    {
        return $this->Extent;
    }

    /**
     * Get all Subjects
     *
     * @return Subject[]
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    
    /**
     * Get all Subjects
     *
     * @return Subject[]
     */
    public function getSubjects()
    {
    	return $this->Subject;
    }

    /**
     * Remove Subject
     *
     * @param Subject $Subject
     * @return void
     */
    public function removeSubject(Subject $Subject)
    {
    }

    /**
     * Get ProductClassification
     *
     * @return ProductClassification
     */
    public function getProductClassification()
    {
        return $this->ProductClassification;
    }

    /**
     * Get Collections
     *
     * @return array
     */
    public function getCollection()
    {
        return $this->Collection;
    }

    /**
     * Get Audience
     *
     * @return array
     */
    public function getAudience()
    {
        return $this->Audience;
    }

    /**
     * Get ProductContentType
     *
     * @return void
     */
    public function getProductContentType()
    {
        return $this->ProductContentType;
    }

    /**
     * Remove Audience
     *
     * @param Audience $Audience
     * @return void
     */
    public function removeAudience(Audience $Audience)
    {
    }

    /**
     * Get Language
     *
     * @return array
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * Remove Language
     *
     * @param Language $language
     * @return void
     */
    public function removeLanguage(Language $language)
    {
    }

    public function removeProductContentType(CodeList81 $ProductContentType)
    {
    }

    /**
     * Remove a ProductFormFeature
     *
     * @param ProductFormFeature
     * @return array
     */
    public function removeProductFormFeature(ProductFormFeature $ProductFormFeature)
    {
    }
    
    /**
     * Get the height measure of the product, if set
     *
     * @return Measure
     */
    public function getHeight()
    {
    	foreach ($this->Measure as $measure) {
    		if ($measure->isHeight()) {
    			return $measure;
    		}
    	}    
    }
    
    /**
     * Get the width measure of the product, if set
     *
     * @return Measure
     */
    public function getWidth()
    {
    	foreach ($this->Measure as $measure) {
    		if ($measure->isWidth()) {
    			return $measure;
    		}
    	}    
    }
    
    /**
     * Get the thickness measure of the product, if set
     *
     * @return Measure
     */
    public function getThickness()
    {
    	foreach ($this->Measure as $measure) {
    		if ($measure->isThickness()) {
    			return $measure;
    		}
    	}    
    }
    
    /**
     * Get the weight measure of the product, if set
     *
     * @return Measure
     */
    public function getWeight()
    {
    	foreach ($this->Measure as $measure) {
    		if ($measure->isWeight()) {
    			return $measure;
    		}
    	}    
    }
    
    /**
     * Get all contributors marked as authors
     *
     * @return array
     */
    public function getAuthors()
    {
    	return array_filter($this->Contributor, function ($contributor) {
    		return $contributor->isAuthor();
    	});
    }

}
