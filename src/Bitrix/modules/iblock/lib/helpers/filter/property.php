<?php

namespace Bitrix\Iblock\Helpers\Filter;

/**
 * Class Property
 *
 * The class to display iblock property with the type of "custom_entity" in the main.ui.filter
 *
 * @package Bitrix\Iblock\Helpers\Filter
 */
class Property
{
    /**
     * Method renders the html for custom_entity field.
     *
     * @param string $filterId Filter id.
     * @param string $propertyType Type property.
     * @param array $listProperty List properties.
     * @return string Html.
     */
    public static function render($filterId, $propertyType, array $listProperty)
    {
    }
    /**
     * Add values in filter.
     *
     * @param array $property Property data.
     * @param array $controlSettings Form data.
     * @param array &$filter Filter data.
     * @param bool &$filtered Marker filter.
     * @return void
     */
    public static function addFilter($property, $controlSettings, &$filter, &$filtered)
    {
    }
    protected static function renderByECrm($filterId, $listProperty)
    {
    }
    protected static function renderByE($filterId, array $listProperty)
    {
    }
    protected static function renderByEmployee($filterId, array $listProperty)
    {
    }
    protected static function getJsHandlerECrm()
    {
    }
    protected static function getJsHandlerEmployee()
    {
    }
    protected static function getJsHandlerE()
    {
    }
    protected static function addFilterByE($property, $controlSettings, &$filter, &$filtered)
    {
    }
}