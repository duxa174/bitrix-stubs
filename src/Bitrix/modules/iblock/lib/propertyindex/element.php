<?php

namespace Bitrix\Iblock\PropertyIndex;

class Element
{
    protected $iblockId = 0;
    protected $elementId = 0;
    protected static $catalog = null;
    protected static $filterPropertyID = array();
    protected $skuIblockId = 0;
    protected $skuPropertyId = 0;
    protected $elementPropertyValues = array();
    protected $elementPrices = array();
    protected $elementSections = array();
    protected static $sectionParents = array();
    /**
     * @param integer $iblockId Information block identifier.
     * @param integer $elementId Element identifier.
     *
     * @throws \Bitrix\Main\LoaderException
     */
    public function __construct($iblockId, $elementId)
    {
    }
    /**
     * Returns identifier of the element.
     *
     * @return integer
     */
    public function getId()
    {
    }
    /**
     * Fills element with data from the database.
     *
     * @return void
     */
    public function loadFromDatabase()
    {
    }
    /**
     * Fills member elementPropertyValues member with property values.
     *
     * @param integer $iblockId Information block identifier.
     * @param array[string]string $elementFilter Element property values criteria.
     *
     * @return void
     */
    protected function loadElementProperties($iblockId, array $elementFilter)
    {
    }
    /**
     * Fills member elementPrices member with prices.
     *
     * @param integer[] $productList Identifiers of the elements.
     *
     * @return void
     */
    protected function loadElementPrices(array $productList)
    {
    }
    /**
     * Fills member elementSections member with sections identifiers of the element.
     *
     * @param integer $elementId Identifier of the element.
     *
     * @return void
     */
    protected function loadElementSections($elementId)
    {
    }
    /**
     * Returns loaded property values.
     *
     * @param integer $propertyId Property identifier.
     *
     * @return array[]mixed
     */
    public function getPropertyValues($propertyId)
    {
    }
    /**
     * Returns loaded price values.
     *
     * @param integer $priceId Price identifier.
     *
     * @return mixed
     */
    public function getPriceValues($priceId)
    {
    }
    /**
     * Returns true if section is the one element connected with.
     *
     * @param integer $sectionId Section identifier.
     *
     * @return boolean
     */
    public function isElementSection($sectionId)
    {
    }
    /**
     * Returns unique array of the element sections.
     *
     * @return integer[]
     */
    public function getSections()
    {
    }
    /**
     * Returns unique array of the element sections with all of their parents.
     *
     * @return integer[]
     */
    public function getParentSections()
    {
    }
    /**
     * Returns all section parents.
     *
     * @param integer $sectionId Section identifier.
     *
     * @return mixed
     */
    public function getSectionParents($sectionId)
    {
    }
}