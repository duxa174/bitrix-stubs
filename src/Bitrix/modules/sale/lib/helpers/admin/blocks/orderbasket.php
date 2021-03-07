<?php

namespace Bitrix\Sale\Helpers\Admin\Blocks;

class OrderBasket
{
    protected static $jsInited = false;
    protected static $arSkuProps = array();
    protected static $offersCatalog = array();
    protected static $iblockPropsParams = array();
    protected static $iblockPropsParamsOrder = array();
    protected static $productsOffersSkuParams = array();
    public $settingsDialog = null;
    /** @var Order $order  */
    protected $order = null;
    protected $data = null;
    protected $dataLight = null;
    protected $jsObjName = "";
    protected $idPrefix = "";
    protected $visibleColumns = array();
    protected $createProductBasement = true;
    protected $mode;
    protected $weightUnit;
    protected $weightKoef;
    protected $isShowXmlId;
    protected static $iblockIncluded = null;
    protected static $catalogIncluded = null;
    protected static $highloadIncluded = null;
    const VIEW_MODE = 0;
    const EDIT_MODE = 1;
    public function __construct(\Bitrix\Sale\Order $order, $jsObjName = "", $idPrefix = "", $createProductBasement = true, $mode = self::EDIT_MODE)
    {
    }
    /**
     * @param bool|false $defTails
     * @return string
     * @throws Main\ArgumentNullException
     */
    public function getEdit($defTails = false)
    {
    }
    public static function getBasePrice(\Bitrix\Sale\Order $order)
    {
    }
    public function getTotalHtml($needRecalculate = true)
    {
    }
    public function getCouponsHtml($mode, $needRecalculate = true)
    {
    }
    /**
     * @param int $index
     * @return string
     */
    public function getView($index = 0)
    {
    }
    /**
     * @param bool|false $defTails deferred or not loading of tails.
     * @return string
     * @throws Main\ArgumentNullException
     */
    public function getScripts($defTails = false)
    {
    }
    protected function getTotalBlockFieldsJs($totalPrices, $data)
    {
    }
    /**
     * @param int $productId
     * @param array $products
     * @return array
     */
    protected function getOffersIds($productId, array $products)
    {
    }
    public function getOffersSkuParams(array $productsParams, array $visibleColumns = array())
    {
    }
    /**
     * @param array $productsParams
     * @param array $visibleColumns
     * @param int $mode
     * @return array
     * @throws Main\LoaderException
     */
    public static function getOffersSkuParamsMode(array $productsParams, array $visibleColumns = array(), $mode = 0)
    {
    }
    /**
     * @param int $productId
     * @param int $quantity
     * @param int $userId
     * @param string $siteId
     * @param array $columns
     * @return array
     * @throws SystemException
     * @deprecated use OrderBasket::getProductsData instead.
     */
    public static function getProductDetails($productId, $quantity, $userId, $siteId, array $columns = array())
    {
    }
    /**
     * @param int[] $productsIds
     * @param string $siteId
     * @param array $fields
     * @param int $userId
     * @return array
     * @throws Main\ArgumentNullException
     */
    public static function getProductsData(array $productsIds, $siteId, array $fields = array(), $userId = 0)
    {
    }
    protected static function getPropsParams($iblockId, array $visibleColumns = array(), array $iblockPropsUsed = array())
    {
    }
    protected static function getPropsFromOffers2(array $items, array $existOffers)
    {
    }
    protected static function getSkuProps($flagAll = false, $iblockId)
    {
    }
    protected function getOffersCatalog($iblockId)
    {
    }
    protected function getPropsList($iblockId, $skuPropertyId = 0)
    {
    }
    protected function filterProps(&$props)
    {
    }
    public function getSettingsDialogContent()
    {
    }
    public static function loadVisibleColumns($idPrefix)
    {
    }
    protected static function getDefaultVisibleColumns()
    {
    }
    protected function getVisibleColumns($idPrefix)
    {
    }
    public static function getProductEditDialogHtml($currency, $objName)
    {
    }
    public static function getCatalogMeasures()
    {
    }
    public static function getDefaultMeasures()
    {
    }
    /**
     * @param $productId
     * @param $quantity
     * @param $userId
     * @param $LID
     * @param $userColumns
     * @param string $tmpId we can suggest that this mean the set_item
     * @return array
     * @throws Main\LoaderException
     * @deprecated use \Bitrix\Sale\Helpers\Admin\Product::getData() instead it.
     */
    public static function getProductDataToFillBasket($productId, $quantity, $userId, $LID, $userColumns, $tmpId = "")
    {
    }
    /**
     * @param array $inParams
     * @return array
     * @throws Main\LoaderException
     */
    public function prepareData(array $inParams = array())
    {
    }
    public function getPrices($discounts = null)
    {
    }
    protected function getPropsForBasketItem($item, array $preparedData = array())
    {
    }
}