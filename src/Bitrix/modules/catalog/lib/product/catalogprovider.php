<?php

namespace Bitrix\Catalog\Product;

/**
 * Class CatalogProvider
 *
 * @package Bitrix\Catalog\Product
 */
class CatalogProvider extends \Bitrix\Sale\SaleProviderBase
{
    private static $userCache = array();
    protected static $hitCache = array();
    protected static $priceTitleCache = array();
    protected static $clearAutoCache = array();
    protected $enableCache = true;
    const CACHE_USER_GROUPS = 'USER_GROUPS';
    const CACHE_ITEM_WITHOUT_RIGHTS = 'IBLOCK_ELEMENT_PERM_N';
    const CACHE_ITEM_RIGHTS = 'IBLOCK_ELEMENT';
    const CACHE_ITEM_WITH_RIGHTS = 'IBLOCK_ELEMENT_PERM_Y';
    const CACHE_ELEMENT_RIGHTS_MODE = 'ELEMENT_RIGHTS_MODE';
    const CACHE_PRODUCT = 'CATALOG_PRODUCT';
    const CACHE_VAT = 'VAT_INFO';
    const CACHE_IBLOCK_RIGHTS = 'IBLOCK_RIGHTS';
    const CACHE_STORE = 'CATALOG_STORE';
    const CACHE_STORE_PRODUCT = 'CATALOG_STORE_PRODUCT';
    const CACHE_PARENT_PRODUCT_ACTIVE = 'PARENT_PRODUCT_ACTIVE';
    const CACHE_CATALOG_IBLOCK_LIST = 'CATALOG_IBLOCK_LIST';
    const CACHE_PRODUCT_STORE_LIST = 'CACHE_PRODUCT_STORE_LIST';
    const CACHE_PRODUCT_AVAILABLE_LIST = 'CACHE_PRODUCT_AVAILABLE_LIST';
    const CATALOG_PROVIDER_EMPTY_STORE_ID = 0;
    const BUNDLE_TYPE = 1;
    const RESULT_PRODUCT_LIST = 'PRODUCT_DATA_LIST';
    const RESULT_CATALOG_LIST = 'CATALOG_DATA_LIST';
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function getProductData(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function getCatalogData(array $products)
    {
    }
    /**
     * @param array $products
     * @param array $options
     *
     * @return Sale\Result
     */
    private function getData(array $products, array $options = array())
    {
    }
    private static function getOutputVariable(array $options = array())
    {
    }
    private static function getResultProvider(\Bitrix\Sale\Result $result, $outputVariable, array $resultList = array())
    {
    }
    /**
     * @param array $list
     * @param array $select
     * @param int|null $userId
     *
     * @return array
     */
    private function getElements(array $list, array $select, $userId = null)
    {
    }
    /**
     * @param array $products
     *
     * @return array|bool|mixed
     */
    public function getBundleItems(array $products)
    {
    }
    /**
     * @param $userId
     *
     * @return bool|array
     */
    protected static function getUserGroups($userId)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function ship(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return array
     */
    private function createReverseQuantityProducts(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function unship(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function deliver(array $products)
    {
    }
    /**
     * @param array $items
     *
     * @return Sale\Result
     */
    public function viewProduct(array $items)
    {
    }
    /**
     * @param array $items
     *
     * @return Sale\Result
     */
    public function recurring(array $items)
    {
    }
    /**
     * @param array $items
     *
     * @return Sale\Result
     */
    public function checkBarcode(array $items)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    protected function shipProducts(array $products)
    {
    }
    /**
     * @param array $quantityList
     *
     * @return Sale\Result
     */
    private static function updateCatalogStoreAmount(array $quantityList)
    {
    }
    /**
     * @param array $productData
     * @param array $productStoreDataList
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private static function shipProduct(array $productData, array $productStoreDataList = array())
    {
    }
    /**
     * @param array $productData
     *
     * @return Sale\Result
     */
    private static function shipQuantityWithStoreControl(array $productData)
    {
    }
    /**
     * @param array $productData
     *
     * @return Sale\Result
     */
    private static function shipQuantityWithoutStoreControl(array $productData)
    {
    }
    /**
     * @param array $productData
     *
     * @return bool
     */
    private static function isExistsReserve(array $productData)
    {
    }
    /**
     * @param array $productData
     * @param array $productStoreDataList
     *
     * @return Sale\Result
     */
    private static function getSetableStoreQuantityProduct(array $productData, array $productStoreDataList)
    {
    }
    /**
     * @param array $productData
     *
     * @return array|bool
     */
    private static function getNeedQuantityFromStore(array $productData)
    {
    }
    /**
     * @param array $productData
     *
     * @return Sale\Result
     */
    private static function deleteBarcodes(array $productData)
    {
    }
    /**
     * @param array $storeData
     *
     * @return Sale\Result
     */
    private static function deleteBarcode(array $storeData)
    {
    }
    /**
     * @param array $productData
     *
     * @return Sale\Result
     */
    private static function addBarcodes(array $productData)
    {
    }
    /**
     * @param array $storeData
     *
     * @return Sale\Result
     */
    private static function addBarcode(array $storeData)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function reserve(array $products)
    {
    }
    /**
     * @param array $productData
     *
     * @return Sale\Result|bool
     */
    private static function reserveProduct(array $productData)
    {
    }
    /**
     * @param array $productData
     *
     * @return Sale\Result
     */
    private static function reserveQuantityWithEnabledReservation(array $productData)
    {
    }
    /**
     * @param array $productData
     *
     * @return Sale\Result
     */
    private static function reserveQuantityWithDisabledReservation(array $productData)
    {
    }
    /**
     * Checks offers parent products existence and activity.
     *
     * @param     $productIds
     * @param int $iblockId
     *
     * @return array
     */
    private static function checkParentActivity($productIds, $iblockId = 0)
    {
    }
    /**
     * @param $priceType
     *
     * @return string
     */
    protected static function getPriceTitle($priceType)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function tryShip(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function isNeedShip(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return array
     */
    private function createQuantityFilteredProducts(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function tryUnship(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function checkProductsInStore(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    private function checkProductsQuantity(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return array
     */
    private function createProductsListWithCatalogData(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return array|bool
     */
    protected function createStoreProductMap(array $products)
    {
    }
    private function checkProductInStores($products)
    {
    }
    private static function isExistsBarcode(array $list)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    protected function checkProductQuantityInStore(array $products)
    {
    }
    /**
     * @param array
     * @param array $storeDataList
     *
     * @return Sale\Result
     */
    protected function checkExistsProductItemInStore(array $productData, array $storeDataList = array())
    {
    }
    /**
     * @param array $products
     * @param array $storeData
     *
     * @return Sale\Result
     */
    protected function checkExistsProductsInStore(array $products, array $storeData = array())
    {
    }
    /**
     * @param array $productData
     * @param array $productStoreData
     * @param array $storeData
     *
     * @return Sale\Result
     */
    protected static function checkProductBarcodes(array $productData, array $productStoreData, array $storeData = array())
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     */
    private function canProductListAutoShip(array $products)
    {
    }
    /**
     * @param array $product
     * @param array $productStoreDataList
     *
     * @return bool|array
     */
    private static function getAutoShipStoreData(array $product, array $productStoreDataList)
    {
    }
    /**
     * @param array $products
     *
     * @return mixed
     */
    protected function getCountProductsInStore(array $products)
    {
    }
    /**
     * @internal
     * @return Sale\Result
     */
    public function getStoresCount()
    {
    }
    /**
     * @return array|false
     */
    private function getStoreIds()
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function getProductListStores(array $products)
    {
    }
    /**
     * @param $type
     * @param $key
     * @param array $fields
     *
     * @return bool|mixed
     */
    protected static function getHitCache($type, $key, array $fields = array())
    {
    }
    /**
     * @param $type
     * @param $key
     * @param array $fields
     *
     * @return bool
     */
    protected static function isExistsHitCache($type, $key, array $fields = array())
    {
    }
    /**
     * @param string $type
     * @param string $key
     * @param mixed $value
     */
    protected static function setHitCache($type, $key, $value)
    {
    }
    /**
     * @param string|null $type
     */
    protected static function clearHitCache($type = null)
    {
    }
    /**
     * @param $fields
     *
     * @return array
     */
    protected static function clearNotCacheFields($fields)
    {
    }
    /**
     * @return array
     */
    protected static function getNotCacheFields()
    {
    }
    protected static function checkNeedFields(array $fields, array $need)
    {
    }
    protected static function isNeedClearPublicCache($currentQuantity, $newQuantity, $quantityTrace, $canBuyZero, $ratio = 1)
    {
    }
    protected static function clearPublicCache($productID, $productInfo = array())
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function getAvailableQuantity(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function getAvailableQuantityAndPrice(array $products)
    {
    }
    /**
     * @param $products
     *
     * @return bool
     */
    private function isExistsCatalogData($products)
    {
    }
    /**
     * @param array $products
     * @param array $list
     *
     * @return array
     */
    private static function removeNotExistsItemFromProducts(array $products, array $list)
    {
    }
    /**
     * @param array $list
     *
     * @return array
     */
    private function getIblockData(array $list)
    {
    }
    /**
     * @param array $iblockList
     * @param array $list
     *
     * @return array
     */
    private static function removeNotExistsIblockFromList(array $iblockList, array $list)
    {
    }
    /**
     * @param array $iblockProductMap
     *
     * @return array
     */
    private function checkSkuPermission(array $iblockProductMap)
    {
    }
    /**
     * @param array $iblockList
     * @param array $iblockDataList
     *
     * @return array
     */
    private static function createIblockProductMap(array $iblockList, array $iblockDataList)
    {
    }
    /**
     * @param array $products
     * @param array $iblockProductMap
     *
     * @return array
     */
    private static function changeSubscribeProductQuantity(array $products, array $iblockProductMap)
    {
    }
    /**
     * @param array $list
     * @param array $select
     *
     * @return array
     */
    private static function getCatalogProducts(array $list, array $select)
    {
    }
    /**
     * @param null $id
     *
     * @return array
     */
    private static function getMeasure($id = null)
    {
    }
    /**
     * @param array $products
     * @param array $productPriceList
     * @param array $discountList
     *
     * @return array
     */
    private function createProductPriceList(array $products, array $productPriceList, array $discountList = array())
    {
    }
    private static function setDataToProducts(array $products, array $resultData)
    {
    }
    /**
     * @param array $products
     * @param array $items
     * @param array $priceList
     * @param array $productQuantityList
     *
     * @return array
     */
    private static function createProductResult(array $products, array $items, array $priceList, array $productQuantityList)
    {
    }
    /**
     * @param array $products
     * @param array $catalogDataList
     * @param array $options
     *
     * @return array
     */
    private static function setCatalogDataToProducts(array $products, array $catalogDataList, array $options = array())
    {
    }
    /**
     * @return bool
     */
    protected static function isReservationEnabled()
    {
    }
    /**
     * @param array $products
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    public static function createOrderListFromProducts(array $products)
    {
    }
    /**
     * @param $productId
     *
     * @return array
     */
    private static function getProductCatalogInfo($productId)
    {
    }
}