<?php

namespace Bitrix\Sale\Location;

class Comparator
{
    const LOCALITY = 0;
    const DISTRICT = 1;
    const REGION = 2;
    const COUNTRY = 3;
    public static $variants = null;
    public static $replacement = null;
    public static function isLocationsEqual($location1, $location2)
    {
    }
    public static function getReplacement()
    {
    }
    public static function setReplacement(\Bitrix\Sale\Location\Comparator\Replacement $replacement = null)
    {
    }
    public static function isCountryRussia($countryName)
    {
    }
    /**
     * @param int|string $type.
     * @return string Comparator class name.
     * @throws ArgumentOutOfRangeException
     */
    private static function getConcreteComparatorClassaName($type)
    {
    }
    public static function isEntityEqual($entity1, $entity2, $type = '')
    {
    }
    protected static function getTypes()
    {
    }
    protected static function getVariantsValues()
    {
    }
    public static function setVariantsValues(array $variants = array())
    {
    }
    public static function setVariants(array $variants = array())
    {
    }
    public static function flatten($value)
    {
    }
    protected static function normalizeVariants(array $variants)
    {
    }
    public static function normalizeEntity($name, $type)
    {
    }
    // Gadyukino d. | Derevnya Gadyukino  => array( 'NAME' => 'Gadykino', 'TYPE' => 'DEREVNYA'
    protected static function normalize($name)
    {
    }
    public static function getLocalityNamesArray($name, $type)
    {
    }
}
class ComparatorLocality extends \Bitrix\Sale\Location\Comparator
{
    public static $variants = null;
    protected static function getTypes()
    {
    }
}
class ComparatorDistrict extends \Bitrix\Sale\Location\Comparator
{
    public static $variants = null;
    protected static function getTypes()
    {
    }
}
class ComparatorRegion extends \Bitrix\Sale\Location\Comparator
{
    public static $variants = null;
    protected static function getTypes()
    {
    }
    public static function setVariantsValues(array $variants = array())
    {
    }
}
class ComparatorCountry extends \Bitrix\Sale\Location\Comparator
{
    public static $variants = null;
    public static function setVariantsValues(array $variants = array())
    {
    }
}