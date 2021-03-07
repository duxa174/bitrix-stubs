<?php

class CBitrixPersonalOrderDetailComponent extends \CBitrixComponent
{
    const E_SALE_MODULE_NOT_INSTALLED = 10000;
    const E_ORDER_NOT_FOUND = 10001;
    const E_CATALOG_MODULE_NOT_INSTALLED = 10003;
    const E_NOT_AUTHORIZED = 10004;
    /**
     * Fatal error list. Any fatal error makes useless further execution of a component code.
     * In most cases, there will be only one error in a list according to the scheme "one shot - one dead body"
     *
     * @var string[] Array of fatal errors.
     */
    protected $errorsFatal = array();
    /**
     * Non-fatal error list. Some non-fatal errors may occur during component execution, so certain functions of the component
     * may became defunct. Still, user should stay informed.
     * There may be several non-fatal errors in a list.
     *
     * @var string[] Array of non-fatal errors.
     */
    protected $errorsNonFatal = array();
    /**
     * Contains some valuable info from $_REQUEST
     *
     * @var object request info
     */
    protected $requestData = array();
    /**
     * Gathered options that are required
     *
     * @var string[] options
     */
    protected $options = array();
    /**
     * Variable remains true if there is 'catalog' module installed
     *
     * @var bool flag
     */
    protected $useCatalog = \true;
    /**
     * Variable remains true if there is 'highloadiblocks' module installed
     *
     * @var bool flag
     */
    protected $useHL = \true;
    /**
     * Variable remains true if there is 'iblock' module installed
     *
     * @var bool flag
     */
    protected $useIBlock = \true;
    /**@var Data\Cache $this->currentCache */
    protected $currentCache = \null;
    /**
     * Loaded order for displaying
     *
     * @var Sale\Order order
     */
    protected $order = \null;
    /**
     * @var Sale\Registry registry
     */
    protected $registry = \null;
    protected $dbResult = array();
    /**
     * A convert map for method self::formatDate()
     *
     * @var string[] keys
     */
    protected $orderDateFields2Convert = array('DATE_INSERT', 'DATE_STATUS', 'PAY_VOUCHER_DATE', 'DATE_DEDUCTED', 'DATE_UPDATE', 'PS_RESPONSE_DATE', 'DATE_PAY_BEFORE', 'DATE_BILL', 'DATE_CANCELED', 'DATE_PAYED');
    protected $compatibilityPaymentFields = array('DATE_PAID' => 'DATE_PAYED', 'PAY_SYSTEM_ID', 'EMP_PAID_ID' => 'EMP_PAYED_ID', 'PAY_VOUCHER_NUM', 'PAY_VOUCHER_DATE', 'PS_STATUS', 'PS_STATUS_CODE', 'PS_STATUS_DESCRIPTION', 'PS_STATUS_MESSAGE', 'PS_SUM', 'PS_CURRENCY', 'PS_RESPONSE_DATE', 'DATE_PAY_BEFORE', 'DATE_BILL');
    protected $compatibilityShipmentFields = array('DELIVERY_ID', 'TRACKING_NUMBER', 'ALLOW_DELIVERY', 'DATE_ALLOW_DELIVERY', 'EMP_ALLOW_DELIVERY_ID', 'DEDUCTED', 'DATE_DEDUCTED', 'EMP_DEDUCTED_ID', 'REASON_UNDO_DEDUCTED', 'RESERVED', 'DELIVERY_DOC_NUM', 'DELIVERY_DOC_DATE', 'DELIVERY_DATE_REQUEST', 'STORE_ID');
    protected $compatibilityUserFields = array('LOGIN', 'NAME', 'LAST_NAME', 'EMAIL');
    public function __construct($component = \null)
    {
    }
    /**
     * Function checks if required modules installed. If not, throws an exception
     * @throws Main\SystemException
     * @return void
     */
    protected function checkRequiredModules()
    {
    }
    /**
     * Function checks if user is authorized or not. If not, auth form will be shown.
     * @return void
     * @throws Main\SystemException
     */
    protected function checkAuthorized()
    {
    }
    /**
     * Function checks and prepares all the parameters passed. Everything about $arParam modification is here.
     * @param mixed[] $arParams List of unchecked parameters
     * @return mixed[] Checked and valid parameters
     */
    public function onPrepareComponentParams($arParams)
    {
    }
    /**
     * Function parses an array: strip empty values, duplicate ones
     * @param mixed[] $fld Field value
     * @return array Parsed value
     */
    public static function tryParseArray(&$fld)
    {
    }
    /**
     * Function reduces input value to integer type, and, if gets null, passes the default value.	 *
     * @param int &$fld					Field value.
     * @param int $default				Default value.
     * @param bool $allowZero			Allows zero-value of the parameter
     * @return int
     */
    public static function tryParseInt(&$fld, $default, $allowZero = \false)
    {
    }
    /**
     * Function processes string value and, if gets null, passes the default value to it
     * @param mixed &$fld Field value
     * @param string $default Default value
     * @return string Parsed value
     */
    public static function tryParseString(&$fld, $default)
    {
    }
    /**
     * Function forces 'Y'/'N' value to boolean
     * @param mixed $fld Field value
     * @return string parsed value
     */
    public static function tryParseBoolean(&$fld)
    {
    }
    /**
     * Function sets page title, if required
     * @return void
     */
    protected function setTitle()
    {
    }
    /**
     * Function gets all options required for component
     * @return void
     */
    protected function loadOptions()
    {
    }
    /**
     * Function could describe what to do when order ID not set. By default, component will redirect to list page.
     * @return void
     */
    protected function doCaseOrderIdNotSet()
    {
    }
    /**
     * Function processes and corrects $_REQUEST. Everything about $_REQUEST lies here.
     * @return void
     */
    protected function processRequest()
    {
    }
    /**
     * Obtain names for properties passed in $arParams['CUSTOM_SELECT_PROPS']
     * @param mixed[] Cached data taken from obtainDataCachedStructure()
     */
    protected function obtainPropertyNames(&$cached)
    {
    }
    /**
     * Return order tax list
     * @param array &$cached		Cached data.
     * @return void
     */
    protected function obtainTaxes(&$cached)
    {
    }
    /**
     * Function fetches information about stores in the system, depending on the delivery system.
     * This method should should be called only after obtainDataCachedStatic().
     * @param mixed[] $cached Cached data taken from obtainDataCachedStructure()
     * @return void
     */
    protected function obtainDeliveryStore(&$cached)
    {
    }
    /**
     * Function gets order basket info from the database
     * @param mixed[] Cached data taken from obtainDataCachedStructure()
     * @return void
     */
    protected function obtainBasket(&$cached)
    {
    }
    /**
     * Function fills all required data about basket item properties
     *
     * @param array $basketItems 		List of basket items
     * @return array Basket items
     */
    public function obtainBasketProps(&$basketItems)
    {
    }
    /**
     * For each basket items it fills information about properties stored in
     *
     * @param array $basketItems		List of basket items.
     * @param array $elementIds			Array of element id.
     * @param array $skuParentMap			Mapping between sku ids and their parent ids.
     * @return void
     */
    public function obtainBasketPropsElement(&$basketItems, $elementIds, $skuParentMap)
    {
    }
    /**
     * @param $item
     * @return int
     */
    protected function getPictureId($item) : int
    {
    }
    /**
     * Creates an array of iBlock properties for the elements with certain IDs
     *
     * @param mixed[] $elementIdList 		$arElementIds Array of element id.
     * @param mixed[] $select 			Fields to select.
     * @return mixed[] 			Array of properties' values in the form of array("ELEMENT_ID" => array of props)
     */
    public function obtainProductProps($elementIdList, $select)
    {
    }
    /**
     * For each basket items it fills information about SKU properties stored in
     *
     * @param array $basketItems		List of basket items
     * @param array $skuPropertyCodes		Sku properties to search for
     * @param array $parentList		Specially formed array, see code below
     * @return void
     */
    public function obtainBasketPropsSKU(&$basketItems, $skuPropertyCodes, $parentList)
    {
    }
    /**
     * @param array $skuIblockIds
     * @param array $skuPropertyCodes
     *
     * @return array
     */
    protected function getSkuPropertyData(array $skuIblockIds, array $skuPropertyCodes)
    {
    }
    /**
     * Function gets order properties from database
     * @param mixed[] $cached Cached data taken from obtainDataCachedStructure()
     * @return void
     */
    protected function obtainProps(&$cached)
    {
    }
    protected function loadOrder($id)
    {
    }
    /**
     * @return void
     */
    protected function checkOrder()
    {
    }
    /**
     * Perform reading main data from database, no cache is used for it
     * @throws Main\SystemException
     * @return void
     */
    protected function obtainDataOrder()
    {
    }
    /**
     * Function gets user info from database, no cache is used for it
     * @return void
     */
    protected function obtainDataUser()
    {
    }
    /**
     * Function accuires all required fine-cacheable information to form $arResult.
     * To pick up some additional data to the cached part of $arResult, make another method that modifies $cachedData and call it here.
     * This method should be called only after obtainDataCachedStatic()
     *
     * @param mixed[] $cachedData Cached data taken from getDataCached()
     * @return void
     */
    protected function obtainDataCachedStructure(&$cachedData)
    {
    }
    /**
     * Function gets pay system info from database, no cache is used here
     * @return void
     */
    protected function obtainDataPaySystem()
    {
    }
    /**
     * Function performs a conversion between a shared cache and the particular structure of our $arResult
     * @param mixed[] $cached Cached data taken from obtainDataReferences()
     * @return mixed[] Data structure that is appropriate for our $arResult
     */
    protected function adaptCachedReferences($cached)
    {
    }
    /**
     * Function returns reference data as shared cache between this component and sale.personal.order.list.
     *
     * @throws Exception
     * @return void
     */
    protected function obtainDataReferences()
    {
    }
    /**
     * Function create cache id.
     *
     * @return array
     */
    protected function createCacheId()
    {
    }
    /**
     * Function contains a mechanism for cacheing data in the component
     *
     * @throws Exception
     * @return void
     */
    protected function obtainDataCached()
    {
    }
    /**
     * Fetches all required data from database. Everything that connected with data obtaining lies here
     *
     * @return void
     */
    protected function obtainDataShipmentBasket()
    {
    }
    /**
     * Function aggregates basket's data from basket items
     *
     */
    protected function obtainDataBasket()
    {
    }
    protected function obtainData()
    {
    }
    /**
     * Function formats links in arResult
     * @return void
     */
    protected function formatResultUrls()
    {
    }
    /**
     * Function formats price info in arResult
     * @return void
     */
    protected function formatResultPrices()
    {
    }
    /**
     * Function formats status info in arResult
     * @return void
     */
    protected function formatResultStatus()
    {
    }
    /**
     * Function formats user info in arResult
     * @return void
     */
    protected function formatResultUser()
    {
    }
    /**
     * Function formats customer info in arResult
     * @return void
     */
    protected function formatResultPerson()
    {
    }
    /**
     * Function formats pay system info in arResult
     * @return void
     */
    protected function formatResultPaySystem()
    {
    }
    /**
     * Function formats delivery system info in arResult
     * @return void
     */
    protected function formatResultDeliverySystem()
    {
    }
    /**
     * Function formats order basket info in arResult
     * @return void
     */
    protected function formatResultBasket()
    {
    }
    /**
     * Function formats taxes info in arResult
     * @return void
     */
    protected function formatResultTaxes()
    {
    }
    /**
     * Function formats weight info in arResult
     * @return void
     */
    protected function formatResultWeight()
    {
    }
    /**
     * Move data read from database to a specially formatted $arResult
     * @return void
     */
    protected function formatResult()
    {
    }
    /**
     * Move all errors to $arResult, if there were any
     * @return void
     */
    protected function formatResultErrors()
    {
    }
    /**
     * Function implements all the life cycle of the component
     * @return void
     */
    public function executeComponent()
    {
    }
    /**
     * Return current class registry
     *
     * @param mixed[] array that date conversion performs in
     * @return void
     */
    protected function setRegistry()
    {
    }
    /**
     * Convert dates if date template set
     * @param mixed[] array that date conversion performs in
     * @return void
     */
    protected function formatDate(&$arr)
    {
    }
    /**
     * Function checks whether a certain item came from 'catalog' module or not
     * @param mixed[] $item An item from basket
     * @return boolean
     */
    public static function cameFromCatalog($item)
    {
    }
    /**
     * @deprecated
     * The callback that changes body encoding when nescessary. Feature doesn`t work here and in the previous version of the component. Left for backward compatibility.
     * @param string $content page content
     * @return void
     */
    public static function changeBodyEncoding($content)
    {
    }
    /**
     * Function checks if it`s argument is a legal array for foreach() construction
     * @param mixed $arr data to check
     * @return boolean
     */
    protected static function isNonemptyArray($arr)
    {
    }
    ////////////////////////
    // Cache functions
    ////////////////////////
    /**
     * Function checks if cacheing is enabled in component parameters
     * @return boolean
     */
    protected final function getCacheNeed()
    {
    }
    /**
     * Function perform start of cache process, if needed
     * @param mixed[]|string $cacheId An optional addition for cache key
     * @return boolean True, if cache content needs to be generated, false if cache is valid and can be read
     */
    protected final function startCache($cacheId = array())
    {
    }
    /**
     * Function perform start of cache process, if needed
     * @throws Main\SystemException
     * @param bool|mixed[] $data Data to be stored in the cache
     * @return void
     */
    protected final function endCache($data = \false)
    {
    }
    /**
     * Function discard cache generation
     * @throws Main\SystemException
     * @return void
     */
    protected final function abortCache()
    {
    }
    /**
     * Function return data stored in cache
     * @throws Main\SystemException
     * @return bool|mixed[] Data from cache
     */
    protected final function getCacheData()
    {
    }
    /**
     * Function leaves the ability to modify cache key in future.
     * @param array $cacheId
     * @return string Cache key to be used in CPHPCache()
     */
    protected final function getCacheKey($cacheId = array())
    {
    }
}