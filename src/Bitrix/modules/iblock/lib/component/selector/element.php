<?php

namespace Bitrix\Iblock\Component\Selector;

class Element extends \Bitrix\Iblock\Component\Selector\Entity
{
    protected $catalogIncluded = null;
    /** @var array Element property list */
    protected $elementProperties = null;
    /** @var array Offer property list */
    protected $offerProperties = null;
    public function __construct($component = null)
    {
    }
    /**
     * @return void
     */
    public function onIncludeComponentLang()
    {
    }
    /**
     * @return void
     */
    protected function checkModules()
    {
    }
    /**
     * @return void
     */
    protected function initEntitySettings()
    {
    }
    /**
     * @return array
     */
    protected function getGridFilterDefinition()
    {
    }
    /**
     * @return array
     */
    protected function getGridColumnsDescription()
    {
    }
    /**
     * @param array $filter
     * @return array
     */
    protected function compileUserFilter(array $filter)
    {
    }
    /**
     * @return array
     */
    protected function getClientExtensions()
    {
    }
    /**
     * @return array
     */
    protected function getDataOrder()
    {
    }
    /**
     * @return void
     */
    protected function getData()
    {
    }
    /**
     * @return string
     */
    protected function getNavigationTitle()
    {
    }
    /**
     * @return array
     */
    protected function getInternalFilter()
    {
    }
    /**
     * @return array
     */
    protected function getSectionFilterDefinition()
    {
    }
    /**
     * @return array
     */
    protected function getElementFieldsFilterDefinition()
    {
    }
    /**
     * @return array
     */
    protected function getProductFieldsFilterDefinition()
    {
    }
    /**
     * @return array
     */
    protected function getElementPropertyFilterDefinition()
    {
    }
    /**
     * @return array
     */
    protected function getOfferPropertyFilterDefinition()
    {
    }
    /**
     * @param array $list
     * @return array
     */
    protected function compileFilterProperties(array $list)
    {
    }
    /**
     * @return array
     */
    protected function getElementFieldsDescription()
    {
    }
    /**
     * @return array
     */
    protected function getProductFieldsDescription()
    {
    }
    /**
     * @return array|null
     */
    protected function getElementPropertiesDescription()
    {
    }
    /**
     * @return void
     */
    protected function loadElementPropertiesDescription()
    {
    }
    /**
     * @return void
     */
    protected function loadOfferPropertiesDescription()
    {
    }
    /**
     * @param array $filter
     * @return array
     */
    protected function loadPropertiesDescription(array $filter)
    {
    }
    /**
     * @param array $row
     * @return bool
     */
    protected static function isFilterableProperty(array $row)
    {
    }
}