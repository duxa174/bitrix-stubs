<?php

class CBitrixBasketComponent extends \CBitrixComponent
{
    const INITIAL_LOAD_ACTION = 'initialLoad';
    const SEARCH_OFFER_BY_PROPERTIES = 'PROPS';
    const SEARCH_OFFER_BY_ID = 'ID';
    const IMAGE_SIZE_STANDARD = 110;
    const IMAGE_SIZE_ADAPTIVE = 320;
    /** @var Sale\Basket\Storage $basketStorage */
    protected $basketStorage;
    protected $action;
    protected $fUserId;
    protected $basketItems = [];
    protected $storage = [];
    /** @var ErrorCollection $errorCollection */
    protected $errorCollection;
    public $arCustomSelectFields = [];
    public $arIblockProps = [];
    public $weightKoef = 0;
    public $weightUnit = 0;
    public $quantityFloat = 'N';
    /** @deprecated deprecated since 14.0.4 */
    public $countDiscount4AllQuantity = 'N';
    public $priceVatShowValue = 'N';
    public $hideCoupon = 'N';
    public $usePrepayment = 'N';
    public $pathToOrder = '/personal/order.php';
    public $columns = [];
    public $offersProps = [];
    protected static $iblockIncluded = \null;
    protected static $catalogIncluded = \null;
    protected static $highLoadInclude = \null;
    public function __construct($component = \null)
    {
    }
    protected function addErrors($errors, $code)
    {
    }
    protected function checkMessageByCode(\Bitrix\Main\Error $error)
    {
    }
    /**
     * Return settings script path with modified time postfix.
     *
     * @param string $componentPath Path to component.
     * @param string $settingsName Settings name.
     * @return string
     * @throws Main\IO\FileNotFoundException
     */
    public static function getSettingsScript($componentPath, $settingsName)
    {
    }
    public function onPrepareComponentParams($params)
    {
    }
    protected function initializeParameters($params)
    {
    }
    public function initParametersFromRequest(&$params)
    {
    }
    protected function isCompatibleMode()
    {
    }
    public function onIncludeComponentLang()
    {
    }
    public static function sendJsonAnswer($result)
    {
    }
    protected function includeModules()
    {
    }
    protected static function includeIblock()
    {
    }
    protected static function includeCatalog()
    {
    }
    protected function makeCompatibleArray(&$array)
    {
    }
    // making correct names for actions (camel case without '_')
    protected function getCorrectActionName($action)
    {
    }
    protected function prepareAction()
    {
    }
    protected function doAction($action)
    {
    }
    protected function initialLoadAction()
    {
    }
    // legacy method
    protected function selectItemAction()
    {
    }
    // legacy method
    protected function recalculateAction()
    {
    }
    // legacy method
    protected function deleteAction()
    {
    }
    // legacy method
    protected function delayAction()
    {
    }
    // legacy method
    protected function addAction()
    {
    }
    // legacy method
    protected function basketOrderAction()
    {
    }
    protected function applyTemplateMutator(&$result)
    {
    }
    protected function recalculateAjaxAction()
    {
    }
    protected function refreshAjaxAction()
    {
    }
    protected function modifyResultAfterSave(&$result)
    {
    }
    protected function addProductToBasket($fields)
    {
    }
    protected function getUserId()
    {
    }
    protected function needToReloadGifts(array $result)
    {
    }
    public function executeComponent()
    {
    }
    protected function getIblockPropertyCodes()
    {
    }
    protected function initializeIblockProperties()
    {
    }
    // legacy method
    public function getCustomColumns()
    {
    }
    protected static function getWarningsFromSession()
    {
    }
    protected function initializeBasketOrderIfNotExists(\Bitrix\Sale\Basket $basket)
    {
    }
    protected function getFuserId()
    {
    }
    protected function getBasketStorage()
    {
    }
    protected function refreshAndCorrectRatio()
    {
    }
    protected function refreshBasket(\Bitrix\Sale\Basket $basket)
    {
    }
    protected function getActualQuantityList(\Bitrix\Sale\Basket $basket)
    {
    }
    protected function checkQuantityList($basket, $compareList)
    {
    }
    protected function loadBasketItems($itemsToLoad = \null)
    {
    }
    // ToDo get gifts result via ajax to prevent BasketStorage loading while using fast load
    protected function isFastLoadRequest()
    {
    }
    protected function needBasketRefresh()
    {
    }
    protected function isBasketIntegrated()
    {
    }
    protected function basketHasItemsToUpdate()
    {
    }
    // legacy method
    public function getBasketItems()
    {
    }
    protected function saveBasket()
    {
    }
    protected function getBasketResult()
    {
    }
    protected function basketItemsMaxCountExceeded()
    {
    }
    protected function getBasketItemsRawArray()
    {
    }
    protected function getBasketItemsArray($filterItems = \null)
    {
    }
    protected function processBasketItem(\Bitrix\Sale\BasketItem $item)
    {
    }
    protected function getBasketItemHash($basketItem)
    {
    }
    protected function getBasketItemProperties(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    protected function loadCatalogInfo()
    {
    }
    protected function loadOfferToProductRelations()
    {
    }
    protected function getBasketProductIds()
    {
    }
    protected function loadIblockProperties()
    {
    }
    protected function modifyLabels(&$product, $productProperties)
    {
    }
    protected function fillItemsWithProperties()
    {
    }
    protected function getAdditionalImageForProduct($iblockId, $properties)
    {
    }
    protected function makeFileSources(&$item, $property)
    {
    }
    protected function makeLinkedProperty(&$item, $property)
    {
    }
    protected function makeDirectoryProperty(&$item, $property)
    {
    }
    /**
     * Resize image depending on scale type
     *
     * @param array $item
     * @param        $imageKey
     * @param array $arImage
     * @param array $sizeAdaptive
     * @param array $sizeStandard
     * @param string $scale
     */
    public static function resizeImage(array &$item, $imageKey, array $arImage, array $sizeAdaptive, array $sizeStandard, $scale = '')
    {
    }
    protected function getErrors()
    {
    }
    // fill item arrays for old templates
    protected function sortItemsByTabs(&$result)
    {
    }
    protected function getGridColumns()
    {
    }
    // fill grid data (for new templates with custom columns)
    protected function getGridRows()
    {
    }
    protected function isNeedBasketUpdateEvent()
    {
    }
    protected function getSessionFUserBasketPrice($fUserId)
    {
    }
    protected function setSessionFUserBasketPrice($price, $fUserId)
    {
    }
    protected function getSessionFUserBasketQuantity($fUserId)
    {
    }
    protected function setSessionFUserBasketQuantity($quantity, $fUserId)
    {
    }
    protected function getAffectedReformattedBasketItemsInDiscount(\Bitrix\Sale\BasketBase $basket, array $discountData, array $calcResults)
    {
    }
    protected function getDiscountData(\Bitrix\Sale\BasketBase $basket)
    {
    }
    protected function getBasketTotal()
    {
    }
    protected function getCouponInfo()
    {
    }
    protected function getPrepayment()
    {
    }
    // legacy method
    public function getSkuPropsData($basketItems, $parents, $arSkuProps = [])
    {
    }
    // legacy method
    public function getAvailableQuantity($basketItems)
    {
    }
    protected function checkCoupon($postList)
    {
    }
    protected function getCouponFromRequest(array $postList)
    {
    }
    protected function getDefaultAjaxAnswer()
    {
    }
    // legacy method
    public function recalculateBasket($postList)
    {
    }
    protected function extractItemsActionData($postList)
    {
    }
    protected function getBasketItemsRatios($actionData)
    {
    }
    protected function processRestore(&$result, $id, $restoreFields)
    {
    }
    protected function processDelete(&$result, \Bitrix\Sale\BasketItemBase $item)
    {
    }
    protected function processChangeQuantity(&$result, $itemRatioData, $quantity)
    {
    }
    protected function processChangeOffer(&$result, $id, $offerProps)
    {
    }
    protected function processMergeOffer(&$result, $id)
    {
    }
    protected function processDelay(&$result, \Bitrix\Sale\BasketItemBase $item, $delay)
    {
    }
    public function checkQuantity($basketItemData, $desiredQuantity)
    {
    }
    protected function mergeProductOffers($basketItemId)
    {
    }
    protected function changeProductOfferWithoutSave($basketId, $searchType, $searchData, $useMerge = \true)
    {
    }
    public function changeProductOffer($basketId, $searchType, $searchData, $useMerge = \true)
    {
    }
    protected function selectOfferByProps($iblockId, $productId, $currentOfferId, array $propertyValues, array $properties)
    {
    }
    protected function selectOfferById($iblockId, $productId, $currentOfferId, $newOfferId, $propertyCodes)
    {
    }
    /**
     * @param array $itemProperties
     * @param array $propertyCodes
     * @return array
     */
    protected static function getMissingPropertyCodes(array $itemProperties, array $propertyCodes)
    {
    }
    /**
     * @param array $basket
     * @param int $basketId
     * @return bool|int|string
     */
    protected static function getBasketKeyById(array $basket, $basketId)
    {
    }
    /**
     * @param array $itemProperties
     * @param array $missingCodes
     * @param array $values
     * @return void
     */
    protected static function fillMissingProperties(array &$itemProperties, array $missingCodes, array $values)
    {
    }
    protected static function updateOffersProperties($oldProps, $newProps)
    {
    }
    protected function getFormatCurrencies()
    {
    }
}