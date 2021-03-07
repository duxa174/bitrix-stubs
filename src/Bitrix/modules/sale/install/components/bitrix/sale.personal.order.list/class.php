<?php

class CBitrixPersonalOrderListComponent extends \CBitrixComponent
{
    const E_SALE_MODULE_NOT_INSTALLED = 10000;
    const E_CANNOT_COPY_ORDER_NOT_FOUND = 10001;
    const E_CANNOT_COPY_CANT_ADD_BASKET = 10002;
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
    protected $useIblock = \true;
    /**
     * A value of current date format
     *
     * @var string format
     */
    private $dateFormat = '';
    /**
     * Filter used when select orders
     *
     * @var mixed[] filter
     */
    protected $filter = array();
    /**
     * Sort field for query
     *
     * @var string field
     */
    protected $sortBy = \false;
    /**
     * Sort direction for query
     *
     * @var string order: asc or desc
     */
    protected $sortOrder = \false;
    /**
     * @var Sale\Registry registry
     */
    protected $registry = \null;
    protected $dbResult = array();
    private $dbQueryResult = array();
    /**@var Data\Cache $this->currentCache */
    protected $currentCache = \null;
    /**
     * A convert map for method self::formatDate()
     *
     * @var string[] keys
     */
    protected $orderDateFields2Convert = array('DATE_INSERT', 'DATE_STATUS', 'PAY_VOUCHER_DATE', 'DATE_DEDUCTED', 'DATE_UPDATE', 'PS_RESPONSE_DATE', 'DATE_PAY_BEFORE', 'DATE_BILL', 'DATE_CANCELED');
    /**
     * A convert map for method self::formatDate()
     *
     * @var string[] keys
     */
    protected $basketDateFields2Convert = array('DATE_INSERT', 'DATE_UPDATE');
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
     * Function reduces input value to integer type, and, if gets null, passes the default value
     * @param mixed $fld Field value
     * @param int $default Default value
     * @param int $allowZero Allows zero-value of the parameter
     * @return int Parsed value
     */
    public static function tryParseInt(&$fld, $default, $allowZero = \null)
    {
    }
    /**
     * Function processes string value and, if gets null, passes the default value to it
     * @param mixed $fld Field value
     * @param string $default Default value
     * @return string parsed value
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
    protected function getOptions()
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
     * Read filter from session (or anywhere else), if required
     * @return void
     */
    protected function filterRestore()
    {
    }
    /**
     * Store filter in session (or anywhere else), if required.
     * @return void
     */
    protected function filterStore()
    {
    }
    /**
     * Creates filter for CSaleOrder::GetList() based on $_REQUEST and other parameters
     * @return void
     */
    protected function prepareFilter()
    {
    }
    /**
     * Function wraps action list evaluation into try-catch block.
     * @return void
     */
    private function performActions()
    {
    }
    /**
     * Function perform pre-defined list of actions based on current state of $_REQUEST and parameters.
     * @return void
     */
    protected function performActionList()
    {
    }
    /**
     * Function checks if order with supplied id is really exists.
     * @param int|string $id Order id
     * @return int Order id
     */
    private function getRealId($id)
    {
    }
    /**
     * Perform the following action: copy order
     * @throws Main\SystemException
     * @return void
     */
    protected function performActionCopyOrder()
    {
    }
    /**
     * Function obtains all properties of a basket item
     * @param int $id Basket item Id to search for
     * @return mixed[] List of basket item properties
     */
    protected function getBasketItemProps($id)
    {
    }
    /**
     * The default action in case of success copying order
     * @return void
     */
    protected function doAfterOrderCopyed()
    {
    }
    /**
     * Function performs moving entire basket content of a certain order into client`s basket. It implements "copy order" action.
     * @param int $id Order id
     * @throws Main\SystemException
     * @return void
     */
    protected function copyOrder2CustomerBasket($id)
    {
    }
    /**
     * Read some data from database, using cache. Under some info we mean status list, delivery system list and so on.
     * This will be a shared cache between sale.personal.order.list and sale.personal.order.detail, so beware of collisions.
     * @return void
     * @throws Exception
     * @throws Main\SystemException
     */
    protected function obtainDataReferences()
    {
    }
    /**
     * Perform reading main data from database, no cache is used
     * @return void
     */
    protected function obtainDataOrders()
    {
    }
    /**
     * Fetches all required data from database. Everything that connected with data fetch is here.
     * @return void
     */
    protected function obtainData()
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
     * Function implements all the life cycle of our component
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
     * @param mixed[] $arr data array to be converted
     * @param string[] $conversion contains sublist of keys of $arr, that will be converted
     * @return void
     */
    protected function formatDate(&$arr, $conversion)
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
     * @param mixed[] $data Data to be stored in the cache
     * @return void
     */
    protected final function endCache($data = \null)
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