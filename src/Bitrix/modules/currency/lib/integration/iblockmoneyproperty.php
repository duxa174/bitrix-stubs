<?php

namespace Bitrix\Currency\Integration;

class IblockMoneyProperty
{
    const USER_TYPE = 'Money';
    const SEPARATOR = '|';
    /**
     * Returns property type description.
     *
     * @return array
     */
    public static function getUserTypeDescription()
    {
    }
    /**
     * Return html for public edit value.
     *
     * @param array $property Property data.
     * @param array $value Current value.
     * @param array $controlSettings Form data.
     * @return string
     */
    public static function getPublicEditHTML($property, $value, $controlSettings)
    {
    }
    /**
     * Return html for public view value.
     *
     * @param array $property Property data.
     * @param array $value Current value.
     * @param array $controlSettings Form data.
     * @return string
     */
    public static function getPublicViewHTML($property, $value, $controlSettings)
    {
    }
    /**
     * The method should return the html display for editing property values in the administrative part.
     *
     * @param array $property Property data.
     * @param array $value Current value.
     * @param array $controlSettings Form data.
     * @return string
     */
    public static function getPropertyFieldHtml($property, $value, $controlSettings)
    {
    }
    /**
     * The method must return safe HTML display the value of the properties on the list of items the administrative part.
     *
     * @param array $property Property data.
     * @param array $value Current value.
     * @param array $controlSettings Form data.
     * @return mixed|string
     */
    public static function getAdminListViewHTML($property, $value, $controlSettings)
    {
    }
    /**
     * Check fields before inserting into the database.
     *
     * @param array $property Property data.
     * @param array $value Current value.
     * @return array An empty array, if no errors.
     */
    public static function checkFields($property, $value)
    {
    }
    /**
     * Get the length of the value. Checks completion of mandatory.
     *
     * @param array $property Property data.
     * @param array $value Current value.
     * @return int
     */
    public static function getLength($property, $value)
    {
    }
    /**
     * The method is to convert the value of a format suitable for storage in a database.
     *
     * @param array $property Property data.
     * @param array $value Current value.
     * @return mixed
     */
    public static function convertToDB($property, $value)
    {
    }
    /**
     * The method is to convert the property value in the processing format.
     *
     * @param array $property Property data.
     * @param array $value Current value.
     * @return mixed
     */
    public static function convertFromDB($property, $value)
    {
    }
    public static function getSeparatedValues($value)
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
    public static function addFilterFields($property, $controlSettings, &$filter, &$filtered)
    {
    }
    protected static function getListCurrency()
    {
    }
    protected static function getJsHandlerSelector($randString, array $listCurrency)
    {
    }
    public static function GetUIEntityEditorProperty($settings, $value)
    {
    }
}