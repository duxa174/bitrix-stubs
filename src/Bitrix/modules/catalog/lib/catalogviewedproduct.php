<?php

namespace Bitrix\Catalog;

class CatalogViewedProductTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns validators for SITE_ID field.
     *
     * @return array
     */
    public static function validateSiteId()
    {
    }
    /**
     * Returns validators for RECOMMENDATION field.
     *
     * @return array
     */
    public static function validateRecommendation()
    {
    }
    /**
     * Common function, used to update/insert any product.
     *
     * @param int $productId			Id of product.
     * @param int $fuserId				User basket id.
     * @param string|mixed $siteId		Site id.
     * @param int $elementId			Parent id.
     * @param string $recommendationId	Bigdata recommendation id.
     *
     * @return int
     */
    public static function refresh($productId, $fuserId, $siteId = SITE_ID, $elementId = 0, $recommendationId = '')
    {
    }
    /**
     * Returns ids map: SKU_PRODUCT_ID => PRODUCT_ID.
     *
     * @param array $originalIds			Input products ids.
     * @return array
     */
    public static function getProductsMap(array $originalIds = array())
    {
    }
    /**
     * Returns product map: array('PRODUCT_ID' => 'ELEMENT_ID').
     *
     * @param int $iblockId					Iblock Id.
     * @param int $sectionId				Section Id.
     * @param int $fuserId					Sale user Id.
     * @param int $excludeProductId				Exclude item Id.
     * @param int $limit					Max count.
     * @param int $depth					Depth level.
     * @param string|null $siteId			Site identifier.
     * @return array
     */
    public static function getProductSkuMap($iblockId, $sectionId, $fuserId, $excludeProductId, $limit, $depth = 0, $siteId = null)
    {
    }
    /**
     * Clear old records.
     *
     * @param int $liveTime			Live time (in days).
     * @return void
     */
    public static function clear($liveTime = 10)
    {
    }
    /**
     * For agent.
     *
     * @return string
     */
    public static function clearAgent()
    {
    }
    private static function truncateUserViewedProducts($fuserId, $siteId)
    {
    }
}