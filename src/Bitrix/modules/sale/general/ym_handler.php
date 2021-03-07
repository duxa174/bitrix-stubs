<?php

/**
 * Yandex market purchase processing
 */
class CSaleYMHandler
{
    const JSON = 0;
    const XML = 1;
    const ERROR_STATUS_400 = "400 Bad Request";
    const ERROR_STATUS_401 = "401 Unauthorized";
    const ERROR_STATUS_403 = "403 Forbidden";
    const ERROR_STATUS_404 = "404 Not Found";
    const ERROR_STATUS_405 = "405 Method Not Allowed";
    const ERROR_STATUS_415 = "415 Unsupported Media Type";
    const ERROR_STATUS_420 = "420 Enhance Your Calm";
    const ERROR_STATUS_500 = "500 Internal Server Error";
    const ERROR_STATUS_503 = "503 Service Unavailable";
    const DATE_FORMAT = "d-m-Y";
    const XML_ID_PREFIX = "ymarket_";
    const TRADING_PLATFORM_CODE = "ymarket";
    protected $communicationFormat = self::JSON;
    protected $siteId = "";
    protected $authType = "HEADER";
    // or URL
    const LOG_LEVEL_DISABLE = 0;
    const LOG_LEVEL_ERROR = 10;
    const LOG_LEVEL_INFO = 20;
    const LOG_LEVEL_DEBUG = 30;
    const NOT_ACCEPT_OLD_PRICE = 0;
    const ACCEPT_OLD_PRICE = 1;
    protected $logLevel = self::LOG_LEVEL_ERROR;
    protected $oAuthToken = \null;
    protected $oAuthClientId = \null;
    protected $oAuthLogin = \null;
    protected $mapDelivery = array();
    protected $outlets = array();
    protected $mapPaySystems = array();
    protected $personTypeId = \null;
    protected $campaignId = \null;
    protected $yandexApiUrl = \null;
    protected $yandexToken = \null;
    protected $orderProps = array("FIO" => "FIO", "EMAIL" => "EMAIL", "PHONE" => "PHONE", "ZIP" => "ZIP", "CITY" => "CITY", "LOCATION" => "LOCATION", "ADDRESS" => "ADDRESS");
    protected $locationMapper = \null;
    protected $active = \true;
    protected $isAcceptOldPrice = self::NOT_ACCEPT_OLD_PRICE;
    protected $defaultDeliveryPeriodFrom = 7;
    //days
    protected $defaultDeliveryPeriodTo = 21;
    protected $deliveryToPaysystem = array();
    protected static $isYandexRequest = \false;
    /**
     * CSaleYMHandler constructor.
     * @param array $arParams
     */
    public function __construct($arParams = array())
    {
    }
    public static function isActive()
    {
    }
    /**
     * @param bool $activity Set or unset activity
     * @return \Bitrix\Main\Entity\UpdateResult|bool
     */
    public static function setActivity($activity)
    {
    }
    /**
     * @param string $siteId
     * @return bool
     */
    protected function checkSiteId($siteId)
    {
    }
    /**
     * @param array $arParams
     * @return mixed|string
     */
    protected function getSiteId($arParams)
    {
    }
    /**
     * Returns Yandex-Market settings
     * @param bool $cached Return cached or ont value
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getSettings($cached = \true)
    {
    }
    /**
     * Returns yandex-market settings for concrete site
     * @param $siteId string Site idenifier
     * @param bool $cached Return cached or ont value
     * @return array
     */
    public static function getSettingsBySiteId($siteId, $cached = \true)
    {
    }
    /**
     * Saves settings
     * @param $arSettings array Settings array to save
     * @return bool
     */
    public static function saveSettings($arSettings)
    {
    }
    /**
     * @param int $period
     * @param string $type
     * @return DateInterval
     */
    public function getTimeInterval($period, $type)
    {
    }
    /**
     * @param DateTime $today
     * @param DateTime $nextDate
     * @return bool
     */
    protected function checkTimeInterval($today, $nextDate)
    {
    }
    /**
     * @param int $from
     * @param int $to
     * @param string $type
     * @return array
     */
    protected function getDeliveryDates($from, $to, $type)
    {
    }
    /**
     * @return array
     */
    protected function getPaymentMethods()
    {
    }
    /**
     * @param array $arPostData
     * @return bool
     */
    protected function checkCartStructure($arPostData)
    {
    }
    /**
     * POST /cart
     * max timeout 5,5s.
     * @param array $arPostData
     * @return array
     * @throws \Bitrix\Main\ArgumentNullException
     */
    protected function processCartRequest($arPostData)
    {
    }
    /**
     * @param string $eventName
     * @param array $params
     * @return mixed
     */
    protected function processCustomEvents($eventName, array $params)
    {
    }
    /**
     * @param array $arPostData
     * @return bool
     */
    protected function checkOrderAcceptStructure($arPostData)
    {
    }
    /**
     * @param array $buyer
     * @param array $address
     * @param array $region
     * @return bool|int|string
     */
    protected function createUser($buyer, $address, $region)
    {
    }
    /**
     * @param array $address
     * @param array $buyer
     * @param int $psId
     * @param int $deliveryId
     * @param int $locationId
     * @return array
     */
    protected function makeAdditionalOrderProps($address, $buyer, $psId, $deliveryId, $locationId)
    {
    }
    protected function createAddressString($address)
    {
    }
    /**
     * POST /order/accept timeout 10s
     * @param array $arPostData
     * @return array
     * @throws Exception
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     */
    protected function processOrderAcceptRequest($arPostData)
    {
    }
    protected function checkBasketPrice(array $items, \Bitrix\Sale\Order $order)
    {
    }
    protected function setBasketOldPrice(array $items, \Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param array $arPostData
     * @return bool
     */
    protected function checkOrderStatusRequest($arPostData)
    {
    }
    /**
     * POST /order/status timeout 10s
     *
     * @param array $arPostData
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected function processOrderStatusRequest($arPostData)
    {
    }
    /**
     * @param string $postData
     * @return array
     */
    protected function extractPostData($postData)
    {
    }
    /**
     * @param array $arData
     * @return string
     */
    protected function prepareResult($arData)
    {
    }
    /**
     * Let's check authorization,
     * comparing incoming token with token stored in settings.
     * @return bool
     */
    public function checkAuth()
    {
    }
    /**
     * @param string $reqObject
     * @param string $method
     * @param string $postData
     * @return string
     */
    public function processRequest($reqObject, $method, $postData)
    {
    }
    /**
     * @param string $status
     * @param string $message
     * @return array
     */
    protected function processError($status = "", $message = "")
    {
    }
    /**
     * @param int $orderId
     * @param string $status
     * @param string $substatus
     * @return bool
     */
    public function sendStatus($orderId, $status, $substatus = \false)
    {
    }
    /**
     * @param string $yandexOrderId
     * @param string $yandexStatus
     * @param string $substatus
     * @param string $siteId
     * @return string
     */
    public static function sendStatusAgent($yandexOrderId, $yandexStatus, $substatus, $siteId)
    {
    }
    /**
     * @param int $orderId
     * @return array|false
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getOrderInfo($orderId)
    {
    }
    /**
     * @param int $orderId
     * @return bool
     */
    public static function isOrderFromYandex($orderId)
    {
    }
    /**
     * @param \Bitrix\Main\Event $params
     */
    public static function onSaleStatusOrderChange(\Bitrix\Main\Event $params)
    {
    }
    /**
     * @param \Bitrix\Main\Event $params
     */
    public static function onSaleOrderCanceled(\Bitrix\Main\Event $params)
    {
    }
    /**
     * @param \Bitrix\Main\Event $params
     */
    public static function onSaleShipmentDelivery(\Bitrix\Main\Event $params)
    {
    }
    /**
     * @param \Bitrix\Main\Event $params
     */
    public static function onSaleOrderPaid(\Bitrix\Main\Event $params)
    {
    }
    /**
     * @param \Bitrix\Main\Event $params
     */
    public static function onShipmentDeducted(\Bitrix\Main\Event $params)
    {
    }
    /**
     * Executes when order's status was changed in shop
     * event OnSaleCancelOrder
     * @param int $orderId Identifier
     * @param string $status New status
     * @param string $substatus Substatus.
     * @return bool
     */
    public function onSaleStatusOrder($orderId, $status, $substatus = \false)
    {
    }
    public static function getOrderSubstatuses()
    {
    }
    public static function getCancelReasonsAsSelect($name, $val = \false, $id = \false)
    {
    }
    public static function getCancelReasonsAsRadio($name, $id = \false, $val = \false)
    {
    }
    public function OnEventLogGetAuditTypes()
    {
    }
    /**
     * @param int $level
     * @param string $type
     * @param string $itemId
     * @param string $description
     * @return bool
     */
    protected function log($level, $type, $itemId, $description)
    {
    }
    /**
     * @param array $order
     * @param string $yandexStatus
     * @param string $cancelReason
     * @return bool|int
     */
    protected function mapYandexStatusToOrder($order, $yandexStatus, $cancelReason = "")
    {
    }
    /**
     * Starts exchange information between Yandex-market and shop
     * @return bool
     */
    public static function eventsStart()
    {
    }
    /**
     * Stops exchange information between Yandex-market and shop
     * @return bool
     */
    public static function eventsStop()
    {
    }
    /**
     * Installs service
     * @return bool
     */
    public static function install()
    {
    }
    /**
     * Uninstalls service
     * @param bool $deleteRecord Delete, or not table record about this service
     */
    public static function unInstall($deleteRecord = \true)
    {
    }
    /**
     * @param int $newOrderId
     * @param $buyer
     */
    protected function sendEmailNewOrder($newOrderId, $buyer)
    {
    }
    /**
     * @param string $code
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    protected function notifyAdmin($code)
    {
    }
    /**
     * @return array
     */
    public static function getExistPaymentMethods()
    {
    }
    /** @deprecated */
    public static function onSaleCancelOrder($orderId, $value, $description)
    {
    }
    /** @deprecated */
    public static function onSaleDeliveryOrder($orderId, $value)
    {
    }
    /** @deprecated */
    public static function onSalePayOrder($orderId, $value)
    {
    }
    /** @deprecated */
    public static function onSaleDeductOrder($orderId, $value)
    {
    }
    /** @deprecated */
    protected function getDeliveryOptions($delivery, $price, $weight = 0)
    {
    }
    /** @deprecated */
    protected function getLocationByCityName($cityName)
    {
    }
    /**
     * Moves settings from options to DB
     * @deprecated
     */
    public static function settingsConverter()
    {
    }
    /**
     * Take out correnspondence to
     * @return string
     * @deprecated
     */
    public static function takeOutOrdersToCorrespondentTable()
    {
    }
    /** @internal  */
    public static function convertDeliveryAndPSIds()
    {
    }
    /**
     * @param string $yandexOrderId
     * @return \Bitrix\Sale\Order|null
     */
    public function loadOrderByYandexOrderId($yandexOrderId)
    {
    }
    /**
     * Returns true if it is yandex request
     * @return bool
     */
    public static function isYandexRequest()
    {
    }
    /**
     * @param Sale\Internals\Entity $entity
     * @return bool
     */
    protected static function isOrderEntity(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
}