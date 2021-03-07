<?php

namespace Bitrix\Iblock\Model;

class PropertyFeature
{
    const EVENT_ID_FEATURE_LIST = 'OnPropertyFeatureBuildList';
    // event name for build feature list
    const FEATURE_ID_LIST_PAGE_SHOW = 'LIST_PAGE_SHOW';
    // show property in element list
    const FEATURE_ID_DETAIL_PAGE_SHOW = 'DETAIL_PAGE_SHOW';
    // detail page show property
    /**
     * Add features for new property. Do not check features in database.
     *
     * @param int $propertyId	Property id.
     * @param array $features	Feature list.
     * @return Main\Entity\Result
     */
    public static function addFeatures($propertyId, array $features)
    {
    }
    public static function updateFeatures($propertyId, array $features)
    {
    }
    /**
     * Upsert property features.
     *
     * @param int $propertyId	Property id.
     * @param array $features	Feature list.
     * @return Main\Entity\Result
     * @throws Main\ArgumentException
     * @throws Main\Db\SqlQueryException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function setFeatures($propertyId, array $features)
    {
    }
    /**
     * Returns verified list of features for add, update or set.
     *
     * @param array $list	Raw features.
     * @return array|null
     */
    protected static function checkFeatureList(array $list)
    {
    }
    /**
     * Checks feature parameters. Returns normalized data or null.
     *
     * @param array $feature	Raw feature parameters.
     * @return array|null
     */
    protected static function checkFeature(array $feature)
    {
    }
    /**
     * Returns unique feature index for search.
     *
     * @param array $feature	Normalize feature parameters.
     * @return string
     */
    public static function getIndex(array $feature)
    {
    }
    /**
     * Build a list of available features for a property.
     *
     * @param array $property		Property description.
     * @param array $description	Additional description.
     * @return array
     */
    public static function getPropertyFeatureList(array $property, array $description = [])
    {
    }
    /**
     * Returns iblock properties identifiers (ID or CODE), showed in element list.
     *
     * @param int $iblockId			Iblock identifier.
     * @param array $parameters		Options.
     * 	keys are case sensitive:
     *		<ul>
     * 		<li>CODE	Return symbolic code as identifier (Y/N, default N).
     *		</ul>
     * @return array|null
     */
    public static function getListPageShowPropertyCodes($iblockId, array $parameters = [])
    {
    }
    /**
     * Returns iblock properties identifiers (ID or CODE), showed on detail element page.
     *
     * @param int $iblockId			Iblock identifier.
     * @param array $parameters		Options.
     * 	keys are case sensitive:
     *		<ul>
     * 		<li>CODE	Return symbolic code as identifier (Y/N, default N).
     *		</ul>
     * @return array|null
     */
    public static function getDetailPageShowPropertyCodes($iblockId, array $parameters = [])
    {
    }
    /**
     * @deprecated deprecated since iblock 19.0.0
     * @see self::getDetailPageShowPropertyCodes
     *
     * @param int $iblockId			Iblock identifier.
     * @param array $parameters		Options.
     * 	keys are case sensitive:
     *		<ul>
     * 		<li>CODE	Return symbolic code as identifier (Y/N, default N).
     *		</ul>
     * @return array|null
     */
    public static function getDetailPageShowProperties($iblockId, array $parameters = [])
    {
    }
    /**
     * Internal method for getting the list of features by filter (within one information block).
     *
     * @param int $iblockId			Iblock identifier.
     * @param array $filter			Feature filter.
     * @param array $parameters		Options.
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
    protected static function getFilteredPropertyCodes($iblockId, array $filter, array $parameters = [])
    {
    }
    /**
     * Returns property identifier. Internal method.
     *
     * @param array $property	Property description (the ID and CODE fields are definitely needed)
     * @param bool $getCode		if true, returns property code or ID (if CODE is empty). Other - returns ID.
     * @return int|string
     */
    protected static function getPropertyCode(array $property, $getCode = false)
    {
    }
    /**
     * Check and normalize feature description. Internal method.
     *
     * @param array $row	Feature description.
     * @return array
     */
    private static function prepareFeatureDescription(array $row)
    {
    }
    /**
     * Returns a list of features available to any information block.
     * Used when building a list of features for an information block property.
     *
     * @return array
     */
    private static function getIblockFeatureList()
    {
    }
    /**
     * Returns three if the feature engine is enabled.
     *
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function isEnabledFeatures()
    {
    }
    /**
     * Returns true, if property features exist.
     *
     * @return bool
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function isPropertyFeaturesExist()
    {
    }
}