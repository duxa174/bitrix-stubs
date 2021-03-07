<?php

namespace Bitrix\Catalog\Product;

class PropertyCatalogFeature extends \Bitrix\Iblock\Model\PropertyFeature
{
    const FEATURE_ID_BASKET_PROPERTY = 'IN_BASKET';
    // property added to basket
    const FEATURE_ID_OFFER_TREE_PROPERTY = 'OFFER_TREE';
    // property is used to select offers
    /**
     * Event handler. Returns catalog feature list for iblock.
     *
     * @param Main\Event $event		Event data.
     * @return Main\EventResult
     */
    public static function handlerPropertyFeatureBuildList(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Unified method to get properties added to basket.
     *
     * @param int $iblockId			Iblock identifier.
     * @param array $parameters		Options
     * 	keys are case sensitive:
     *		<ul>
     * 		<li>CODE	Return symbolic code as identifier (Y/N, default N).
     *		</ul>
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getBasketPropertyCodes($iblockId, array $parameters = [])
    {
    }
    /**
     * Unified method for obtaining properties used to select offers.
     *
     * @param int $iblockId			Iblock identifier.
     * @param array $parameters		Options
     * 	keys are case sensitive:
     *		<ul>
     * 		<li>CODE	Return symbolic code as identifier (Y/N, default N).
     *		</ul>
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getOfferTreePropertyCodes($iblockId, array $parameters = [])
    {
    }
    /**
     * Getting properties added to basket when feature engine is off.
     * Internal method.
     *
     * @param array $catalog		Catalog description.
     * @param array $parameters		Options
     * 	keys are case sensitive:
     *		<ul>
     * 		<li>CODE	Return symbolic code as identifier (Y/N, default N).
     *		</ul>
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private static function getBasketPropertyByTypes(array $catalog, array $parameters = [])
    {
    }
    /**
     * Getting the properties used to select offers when feature engine is off.
     * Internal method.
     *
     * @param array $catalog		Catalog description.
     * @param array $parameters		Options
     * 	keys are case sensitive:
     *		<ul>
     * 		<li>CODE	Return symbolic code as identifier (Y/N, default N).
     *		</ul>
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private static function getOfferTreePropertyByTypes(array $catalog, array $parameters = [])
    {
    }
    /**
     * Check - can the property be added to the basket.
     * Internal method.
     *
     * @param array $property		Property description.
     * @param array $description	Additional description.
     * @return bool
     */
    private static function checkBasketProperty(array $property, array $description)
    {
    }
    /**
     * Check - can the property be used to select trade offers.
     * Internal method.
     *
     * @param array $property		Property description.
     * @param array $description	Additional description.
     * @return bool
     */
    private static function checkOfferTreeProperty(array $property, array $description)
    {
    }
}