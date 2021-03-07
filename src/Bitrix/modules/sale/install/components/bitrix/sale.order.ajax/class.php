<?php

class SaleOrderAjax extends \CBitrixComponent
{
    const AUTH_BLOCK = 'AUTH';
    const REGION_BLOCK = 'REGION';
    const PAY_SYSTEM_BLOCK = 'PAY_SYSTEM';
    const DELIVERY_BLOCK = 'DELIVERY';
    const PROPERTY_BLOCK = 'PROPERTY';
    /** @var Order $order */
    protected $order;
    /** @var Sale\Basket\Storage $basketStorage */
    protected $basketStorage;
    /** @var Sale\Basket */
    private $calculateBasket;
    protected $action;
    protected $arUserResult;
    protected $isOrderConfirmed;
    protected $arCustomSelectFields = [];
    protected $arElementId = [];
    protected $arSku2Parent = [];
    /** @var Delivery\Services\Base[] $arDeliveryServiceAll */
    protected $arDeliveryServiceAll = [];
    protected $arPaySystemServiceAll = [];
    protected $arActivePaySystems = [];
    protected $arIblockProps = [];
    /** @var  PaySystem\Service $prePaymentService */
    protected $prePaymentService;
    protected $useCatalog;
    /** @var Main\Context $context */
    protected $context;
    protected $checkSession = \true;
    protected $isRequestViaAjax;
    public function onPrepareComponentParams($arParams)
    {
    }
    /**
     * Returns array of order properties from request
     *
     * @return array
     */
    protected function getPropertyValuesFromRequest()
    {
    }
    protected function addLastLocationPropertyValues($orderProperties)
    {
    }
    protected function getBasketStorage()
    {
    }
    protected function getLastOrderData(\Bitrix\Sale\Order $order)
    {
    }
    protected function initLastOrderData(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Gets full order property list including all potential related properties (e.g. related to delivery or pay system).
     *
     * @param \Bitrix\Sale\Order $order
     * @return array
     */
    protected function getFullPropertyList(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Initializes order properties from request, user profile, default values.
     * Checks properties (if order saves) and sets to the order.
     * Execution of 'OnSaleComponentOrderProperties' event.
     *
     * @param Order $order
     * @param       $isPersonTypeChanged
     */
    protected function initProperties(\Bitrix\Sale\Order $order, $isPersonTypeChanged)
    {
    }
    /**
     * Sets properties from $this->arUserResult['ORDER_PROP'] to the order.
     *
     * @param \Bitrix\Sale\Order $order
     */
    protected function setOrderProperties(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Returns user property value from CUser
     *
     * @param    $property
     * @return    string
     */
    protected function getValueFromCUser($property)
    {
    }
    /**
     * Defines zip value if location was changed.
     *
     * @param Order $order
     * @param       $loadFromProfile
     */
    protected function checkZipProperty(\Bitrix\Sale\Order $order, $loadFromProfile)
    {
    }
    /**
     * Checks order properties for proper alternate location property display.
     *
     * @param Order $order
     * @param       $useProfileProperties
     * @param array $profileProperties
     */
    protected function checkAltLocationProperty(\Bitrix\Sale\Order $order, $useProfileProperties, array $profileProperties)
    {
    }
    protected function haveCitiesInTree($locationCode)
    {
    }
    /**
     * Returns basket quantity list for orderable items
     *
     * @param Sale\BasketBase $basket
     * @return array
     */
    protected function getActualQuantityList(\Bitrix\Sale\BasketBase $basket)
    {
    }
    /**
     * Append basket(for current FUser) to order object
     *
     * @param Order $order
     * @throws Main\ObjectNotFoundException
     */
    protected function initBasket(\Bitrix\Sale\Order $order)
    {
    }
    private function loadBasket()
    {
    }
    protected function showEmptyBasket()
    {
    }
    protected function addError($res, $type = 'MAIN')
    {
    }
    protected function addWarning($res, $type)
    {
    }
    protected static function getEscapedPostValue($name, $value)
    {
    }
    /**
     * Action - show and process authorization form
     *
     * @throws Main\ArgumentNullException
     */
    protected function showAuthFormAction()
    {
    }
    protected function confirmSmsCodeAction()
    {
    }
    protected function checkSocServicesAuthForm()
    {
    }
    protected function doAuthorize()
    {
    }
    protected function doRegister()
    {
    }
    protected function initStatGid()
    {
    }
    protected function initAffiliate()
    {
    }
    /**
     * Generation of user registration fields (login, password, etc)
     *
     * @param array $userProps
     * @return array
     * @throws Main\ArgumentNullException
     */
    public function generateUserData($userProps = [])
    {
    }
    protected function getNormalizedPhone($phone)
    {
    }
    protected function getNormalizedPhoneForRegistration($phone)
    {
    }
    /**
     * Creating new user and logging in
     *
     * @param $userProps
     * @return bool|int
     */
    protected function registerAndLogIn($userProps)
    {
    }
    /**
     * Returns array of user id and 'save to session' flag (true if 'unique user e-mails' option
     * active and we already have this e-mail)
     *
     * @return array
     * @throws Main\ArgumentNullException
     */
    protected function autoRegisterUser()
    {
    }
    public function initGrid()
    {
    }
    public function getGridHeaders($productColumns)
    {
    }
    public function getPropsInfo($source)
    {
    }
    public function getIblockProps($value, $propData, $arSize = ["WIDTH" => 90, "HEIGHT" => 90], $orderId = 0)
    {
    }
    public function getLinkedPropValue($basketItem, $property)
    {
    }
    public function getDirectoryProperty($basketItem, $property)
    {
    }
    public function getFileData($fileId, $orderId = 0, $arSize = ["WIDTH" => 90, "HEIGHT" => 90])
    {
    }
    /**
     * Set formatted order properties to $this->arResult (heavy load due to compatibility)
     * Execution of 'OnSaleComponentOrderOneStepOrderProps' event
     */
    protected function obtainFormattedProperties()
    {
    }
    protected function getOrderPropFormatted($arProperty, &$arDeleteFieldLocation = [])
    {
    }
    public static function formatYN(array &$arProperty)
    {
    }
    public static function formatString(array &$arProperty)
    {
    }
    public static function formatNumber(array &$arProperty)
    {
    }
    public static function formatEnum(array &$arProperty)
    {
    }
    public static function formatLocation(array &$arProperty, array &$arDeleteFieldLocation, $locationAltPropDisplayManual = \null)
    {
    }
    public static function formatFile(array &$arProperty)
    {
    }
    public static function formatDate(array &$arProperty)
    {
    }
    /**
     * Set basket items data from order object to $this->arResult
     */
    protected function obtainBasket()
    {
    }
    /**
     * Set basket items data from iblocks (basket column properties, sku, preview pictures, etc) to $this->arResult
     */
    protected function obtainPropertiesForIbElements()
    {
    }
    /**
     * Set delivery data from shipment object and delivery services object to $this->arResult
     * Execution of 'OnSaleComponentOrderOneStepDelivery' event
     *
     * @throws Main\NotSupportedException
     */
    protected function obtainDelivery()
    {
    }
    /**
     * Set pay system data from inner/external payment object and pay system services object to $this->arResult
     * Execution of 'OnSaleComponentOrderOneStepPaySystem' event
     */
    protected function obtainPaySystem()
    {
    }
    /**
     * Set related to payment/delivery order properties data from order object to $this->arResult
     *
     * @throws Main\ObjectNotFoundException
     */
    protected function obtainRelatedProperties()
    {
    }
    /**
     * Set taxes data from order object to $this->arResult
     */
    protected function obtainTaxes()
    {
    }
    /**
     * Set order total prices data from order object to $this->arResult
     */
    protected function obtainTotal()
    {
    }
    /**
     * Obtains all order fields filled by user.
     */
    protected function obtainUserConsentInfo()
    {
    }
    /**
     * Make $arResult compatible ('~' prefixes and htmlspecialcharsEx)
     */
    protected function makeResultCompatible()
    {
    }
    public static function makeCompatibleArray(&$array)
    {
    }
    /**
     * Check if PayPal prepayment is available
     *
     * @param Order $order
     * @throws Main\ArgumentException
     * @throws Main\NotSupportedException
     */
    protected function usePrepayment(\Bitrix\Sale\Order $order)
    {
    }
    protected function prepayOrder()
    {
    }
    /**
     * Initialization of person types. Set person type data to $this->arResult.
     * Return true if person type changed.
     * Execution of 'OnSaleComponentOrderOneStepPersonType' event
     *
     * @param Order $order
     * @return bool
     * @throws Main\ArgumentException
     */
    protected function initPersonType(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Initialization of user profiles. Set user profiles data to $this->arResult.
     *
     * @param Order $order
     * @param       $isPersonTypeChanged
     */
    protected function initUserProfiles(\Bitrix\Sale\Order $order, $isPersonTypeChanged)
    {
    }
    public function getCurrentShipment(\Bitrix\Sale\Order $order)
    {
    }
    protected function getDeliveryIds(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Initialization of shipment object with first/selected delivery service.
     *
     * @param Shipment $shipment
     * @throws Main\NotSupportedException
     */
    protected function initDelivery(\Bitrix\Sale\Shipment $shipment)
    {
    }
    protected function initDeliveryServices(\Bitrix\Sale\Shipment $shipment)
    {
    }
    protected function loadUserAccount(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Set user budget data to $this->arResult. Returns sum to spend(including restrictions).
     *
     * @param Order $order
     * @param bool $recalculate
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    protected function getInnerPaySystemInfo(\Bitrix\Sale\Order $order, $recalculate = \false)
    {
    }
    public function getInnerPayment(\Bitrix\Sale\Order $order)
    {
    }
    public function getExternalPayment(\Bitrix\Sale\Order $order)
    {
    }
    protected function showOnlyPrepaymentPs($paySystemId)
    {
    }
    /**
     * Initialization of inner/external payment objects with first/selected pay system services.
     *
     * @param Order $order
     * @throws Main\ObjectNotFoundException
     */
    protected function initPayment(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Recalculates payment prices which could change due to shipment/discounts.
     *
     * @param Order $order
     * @throws Main\ObjectNotFoundException
     */
    protected function recalculatePayment(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Calculates all available deliveries for order object.
     * Uses cloned order not to harm real order.
     * Execution of 'OnSaleComponentOrderDeliveriesCalculated' event
     *
     * @param Order $order
     * @throws Main\NotSupportedException
     */
    protected function calculateDeliveries(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param Order $order
     *
     * @return Order
     */
    protected function getOrderClone(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Set specific order fields and user description.
     *
     * @param Order $order
     * @throws Main\ObjectNotFoundException
     */
    protected function initOrderFields(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Ajax action - recalculate order and send JSON answer with data/errors
     */
    protected function refreshOrderAjaxAction()
    {
    }
    /**
     * Returns true if basket quantity list is equal to basket "before refresh" state
     *
     * @param Order $order
     * @return bool
     */
    protected function checkOrderConsistency(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Ajax action - attempt to save order and send JSON answer with data/errors
     */
    protected function saveOrderAjaxAction()
    {
    }
    /**
     * Ajax action - add coupon and if needed recalculate order with JSON answer
     */
    protected function enterCouponAction()
    {
    }
    /**
     * Ajax action - remove coupon and if needed recalculate order with JSON answer
     */
    protected function removeCouponAction()
    {
    }
    /**
     * Execution of 'OnSaleComponentOrderShowAjaxAnswer' event
     *
     * @param $result
     */
    protected function showAjaxAnswer($result)
    {
    }
    public static function compareProperties($a, $b)
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
    /**
     * Obtain all order data to $this->arResult['JS_DATA'] for template js initialization
     * Execution of 'OnSaleComponentOrderJsData' event
     *
     * @throws Main\ObjectNotFoundException
     */
    protected function getJsDataResult()
    {
    }
    /**
     * Scales images of all entities depending on scale parameters
     *
     * @param        $result
     * @param string $scale
     */
    public static function scaleImages(&$result, $scale = '')
    {
    }
    /**
     * Returns array with locations data output
     *
     * @return array
     */
    protected function getLocationsResult()
    {
    }
    protected function getLocationHtml($property, $locationTemplate)
    {
    }
    protected function isActiveCoupon($coupon)
    {
    }
    /**
     * Prepares $this->arResult
     * Execution of 'OnSaleComponentOrderOneStepProcess' event
     */
    protected function prepareResultArray()
    {
    }
    /**
     * Create $this->arUserResult array and fill with data from request
     * Execution of 'OnSaleComponentOrderUserResult' event
     */
    protected function makeUserResultArray()
    {
    }
    /**
     * Wrapper for event execution method.
     * Synchronizes modified data from event if needed.
     *
     * @param string $eventName
     * @param null $order
     * @deprecated
     * Compatibility method for old events.
     * Use new events like "OnSaleComponentOrderCreated" and "OnSaleComponentOrderResultPrepared" instead.
     *
     */
    protected function executeEvent($eventName = '', $order = \null)
    {
    }
    protected function synchronize($arModifiedResult, \Bitrix\Sale\Order $order)
    {
    }
    /**
     * Synchronization of modified fields with current order object.
     *
     * @param       $modifiedFields
     * @param Order $order
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    protected function synchronizeOrder($modifiedFields, \Bitrix\Sale\Order $order)
    {
    }
    public static function arrayDiffRecursive($arr1, $arr2)
    {
    }
    protected function makeOrderDataArray()
    {
    }
    protected function saveProfileData()
    {
    }
    protected function addStatistic()
    {
    }
    /**
     * Initialization of shipment object. Filling with basket items.
     *
     * @param Order $order
     * @return Shipment
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function initShipment(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Initializes user data and creates order.
     * Checks for event flags for possible order/payments recalculations.
     * Execution of 'OnSaleComponentOrderOneStepDiscountBefore' event.
     *
     * @param $userId
     * @return Order
     */
    protected function createOrder($userId)
    {
    }
    /**
     * Returns created order object based on user and request data.
     * Execution of 'OnSaleComponentOrderCreated' event.
     *
     * @param $userId
     * @return Order
     */
    protected function getOrder($userId)
    {
    }
    /**
     * Initializes companies for payment and shipment
     *
     * @param Order $order
     */
    protected function initEntityCompanyIds(\Bitrix\Sale\Order $order)
    {
    }
    protected function initTradeBinding(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * Prepares action string to execute in doAction
     *
     * refreshOrderAjax/saveOrderAjax - process/save order via JSON (new template)
     * enterCoupon/removeCoupon - add/delete coupons via JSON (new template)
     * showAuthForm - show authorization form (old/new templates)                 [including component template]
     * processOrder - process order (old(all hits)/new(first hit) templates) [including component template]
     * showOrder - show created order (old/new templates)                             [including component template]
     *
     * @return null|string
     */
    protected function prepareAction()
    {
    }
    /**
     * Checks whether component implements selected action.
     *
     * @param $action
     * @return bool
     */
    protected function actionExists($action)
    {
    }
    /**
     * Executes prepared action with postfix 'Action'
     *
     * @param $action
     */
    protected function doAction($action)
    {
    }
    protected function processOrderAction()
    {
    }
    /**
     * Action - show created order and payment info
     */
    protected function showOrderAction()
    {
    }
    /**
     * Action - saves order if there are no errors
     * Execution of 'OnSaleComponentOrderOneStepComplete' event
     *
     * @param bool $saveToSession
     */
    protected function saveOrder($saveToSession = \false)
    {
    }
    public function executeComponent()
    {
    }
}