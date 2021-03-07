<?php

namespace Bitrix\Catalog\Config;

/**
 * Class State
 * Provides methods for checking product restrictions and obtaining current settings based on constraints.
 *
 * @package Bitrix\Catalog\Config
 */
final class State
{
    /** @var array */
    private static $landingSections = null;
    /** @var array */
    private static $iblockSections = null;
    /** @var array */
    private static $fullIblockSections = null;
    /** @var int */
    private static $elementCount = null;
    /** @var array */
    private static $iblockList = [];
    /**
     * Returns true if warehouse inventory management is allowed and enabled.
     *
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function isUsedInventoryManagement()
    {
    }
    /**
     * Returns true if the limit on the number of price types is exceeded.
     *
     * @return bool
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function isExceededPriceTypeLimit()
    {
    }
    /**
     * Returns true if it is allowed to add a new price type.
     *
     * @return bool
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function isAllowedNewPriceType()
    {
    }
    /**
     * Returns true if the limit on the number of warehouses is exceeded.
     *
     * @return bool
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function isExceededStoreLimit()
    {
    }
    /**
     * Returns true if it is allowed to add a new warehouse.
     *
     * @return bool
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function isAllowedNewStore()
    {
    }
    /**
     * Returns information about exceeding the number of goods in the landing for the information block.
     *
     * @param int $iblockId		Iblock Id.
     * @return array|false
     */
    public static function getExceedingProductLimit($iblockId)
    {
    }
    /**
     * OnIBlockElementAdd event handler. Do not use directly.
     *
     * @param array &$fields
     * @return bool
     */
    public static function handlerBeforeIblockElementAdd(array &$fields)
    {
    }
    /**
     * OnAfterIBlockElementAdd event handler. Do not use directly.
     *
     * @param array &$fields
     * @return void
     */
    public static function handlerAfterIblockElementAdd(array &$fields)
    {
    }
    /**
     * OnBeforeIBlockElementUpdate event handler. Do not use directly.
     *
     * @param array &$fields
     * @return bool
     */
    public static function handlerBeforeIblockElementUpdate(array &$fields)
    {
    }
    /**
     * OnAfterIBlockElementUpdate event handler. Do not use directly.
     *
     * @param array &$fields
     * @return void
     * @throws Main\LoaderException
     */
    public static function handlerAfterIblockElementUpdate(array &$fields)
    {
    }
    /**
     * OnAfterIBlockElementDelete event handler. Do not use directly.
     *
     * @param array $fields
     * @return void
     */
    public static function handlerAfterIblockElementDelete(array $fields)
    {
    }
    /**
     * OnAfterIBlockSectionAdd event handler. Do not use directly.
     *
     * @param array &$fields
     * @return void
     */
    public static function handlerAfterIblockSectionAdd(array &$fields)
    {
    }
    /**
     * OnBeforeIBlockSectionUpdate event handler. Do not use directly.
     *
     * @param array &$fields
     * @return bool
     */
    public static function handlerBeforeIblockSectionUpdate(array &$fields)
    {
    }
    /**
     * OnAfterIBlockSectionUpdate event handler. Do not use directly.
     *
     * @param array &$fields
     * @return void
     */
    public static function handlerAfterIblockSectionUpdate(array &$fields)
    {
    }
    /**
     * OnAfterIBlockSectionDelete event handler. Do not use directly.
     *
     * @param array $fields
     * @return void
     */
    public static function handlerAfterIblockSectionDelete(array $fields)
    {
    }
    /**
     * @param int $iblockId
     * @return int
     */
    private static function getElementCount($iblockId)
    {
    }
    /**
     * @param int $iblockId
     * @return array
     */
    private static function getIblockSections($iblockId)
    {
    }
    /**
     * @param int $iblockId
     * @return void
     */
    private static function loadIblockSections($iblockId)
    {
    }
    /**
     * Returns the sections Id used in landings.
     *
     * @return array
     */
    private static function getLandingSections()
    {
    }
    /**
     * @return int
     * @throws Main\LoaderException
     */
    private static function getCrmCatalogId()
    {
    }
    /**
     * @param array $fields
     * @return bool
     * @throws Main\LoaderException
     */
    private static function checkIblockId(array $fields)
    {
    }
    /**
     * Returns products limit.
     *
     * @param int $iblockId
     * @return array|false
     */
    private static function checkIblockLimit($iblockId)
    {
    }
    /**
     * @param $iblockId
     * @return array
     * 	keys are case sensitive:
     *		<ul>
     *		<li>int COUNT
     * 		<li>int LIMIT
     *		</ul>
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private static function getIblockLimit($iblockId)
    {
    }
    /**
     * Send error.
     *
     * @param array $limit
     * @param string $messageId
     * @return void
     */
    private static function setProductLimitError(array $limit, $messageId = '')
    {
    }
    /**
     * Returns true if product card slider option is checked.
     *
     * @return bool
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function isProductCardSliderEnabled() : bool
    {
    }
}