<?php

namespace Bitrix\Sale\Update;

/**
 * Class CrmEntityCreator
 * Create crm entities: contact and company
 *
 * @package Bitrix\Sale\Update
 */
final class CrmEntityCreator
{
    /** @var Order\Order $order */
    private $order;
    /**
     * CrmEntityCreator constructor
     *
     * @param Order\Order $order
     */
    public function __construct(\Bitrix\Crm\Order\Order $order)
    {
    }
    /**
     * @return Sale\Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws \Exception
     */
    public function create()
    {
    }
    /**
     * @return bool
     */
    private function isSetResponsible()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    private function setResponsible()
    {
    }
    /**
     * @return void
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\SystemException
     */
    private function addContactCompany()
    {
    }
    /**
     * @return void
     * @throws Main\ArgumentException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\SystemException
     */
    private function setContactCompanyRequisites()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function addTimeLines()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @return void;
     */
    private function addTimelineEntryOnCreate()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @return void;
     */
    private function addTimelineEntryOnCancel()
    {
    }
    /**
     * @param $prevStatus
     * @param $currentStatus
     * @return void;
     * @throws Main\ArgumentException
     */
    private function addTimelineEntryOnStatusModify($prevStatus, $currentStatus)
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getHistoryChanges()
    {
    }
}
/**
 * Class CrmEntityCreatorStepper
 * Stepper for creating crm entities
 *
 * @package Bitrix\Sale\Update
 */
final class CrmEntityCreatorStepper extends \Bitrix\Main\Update\Stepper
{
    const CONTINUE_EXECUTING = true;
    const STOP_EXECUTING = false;
    /** @var string */
    const IS_SALE_CRM_SITE_MASTER_STUB = "~IS_SALE_CRM_SITE_MASTER_STUB";
    /** @var string */
    const ORDER_CONVERT_IS_FINISH = "~ORDER_CONVERT_IS_FINISH";
    /** @var string */
    const IS_SALE_CRM_SITE_MASTER_FINISH = "~IS_SALE_CRM_SITE_MASTER_FINISH";
    const PREFIX_OPTION_ADMIN_PANEL_IS_ENABLED = "~ADMIN_PANEL_IS_ENABLED_FOR_";
    const IS_CRM_SITE_MASTER_OPENED = "~IS_CRM_SITE_MASTER_OPENED";
    /** @var string */
    const WIZARD_SITE_ID = "~CRM_WIZARD_SITE_ID";
    /** @var string */
    const STEPPER_PARAMS = "~CRM_ENTITY_CREATOR_STEPPER_PARAMS";
    const UPDATE_ORDER_CONVERTER_CRM_ERROR_TABLE = "~UPDATE_ORDER_CONVERTER_CRM_ERROR_TABLE";
    const ORDER_CONVERTER_CRM_ERROR_COUNT = "~ORDER_CONVERTER_CRM_ERROR_COUNT";
    /** @var int max executing time in sec */
    const MAX_EXECUTION_TIME = 5;
    /** @var int max orders of iteration */
    const MAX_ORDERS = 100;
    protected static $moduleId = "sale";
    private $orderList = [];
    private $params = [];
    /**
     * @param array &$result
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\NotImplementedException
     * @throws Main\SystemException
     */
    public function execute(array &$result)
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function createCrmEntity()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private function initParams()
    {
    }
    /**
     * @param $orderId
     * @throws Main\ArgumentOutOfRangeException
     */
    private function updateParams($orderId)
    {
    }
    /**
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    private function getOrders()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getErrorOrders()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    private function getOrderCount()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getErrorOrderCount()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function setFinishStatus()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function isFinished()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private static function isUpdateOrder()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function isNeedStub()
    {
    }
    /**
     * @return bool
     */
    public static function isAgent()
    {
    }
    /**
     * Show progress bar in crm and shop section
     *
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function showProgressBar() : void
    {
    }
    /**
     * @return string
     */
    public static function getTitle()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function bindAgent() : void
    {
    }
    /**
     * Register event handler for show progressbar
     */
    public static function registerEventHandler()
    {
    }
    /**
     * Unregister event handler for show progressbar
     */
    public static function unregisterEventHandler()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function bindAgentOrderUpdate()
    {
    }
    /**
     * Register event handler for show progressbar
     *
     * @throws Main\ArgumentNullException
     */
    public static function registerOrderUpdateEventHandler()
    {
    }
    /**
     * Unregister event handler for show progressbar
     */
    public static function unregisterOrderUpdateEventHandler()
    {
    }
    /**
     * @param $orderId
     * @param $errorMessage
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws \Exception
     */
    private function setError($orderId, $errorMessage) : void
    {
    }
    /**
     * @param $orderId
     * @param $errorMessage
     * @throws \Exception
     */
    private function addError($orderId, $errorMessage)
    {
    }
    /**
     * @param $orderId
     * @param $errorMessage
     * @throws \Exception
     */
    private function updateError($orderId, $errorMessage)
    {
    }
    /**
     * @param $orderId
     * @throws \Exception
     */
    private function deleteError($orderId)
    {
    }
    /**
     * @param array $parameters
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getErrors(array $parameters = [])
    {
    }
    /**
     * @param $message
     */
    private function addAdminNormalNotify($message)
    {
    }
    /**
     * @param $message
     */
    private function addAdminErrorNotify($message)
    {
    }
    /**
     * Add notification in admin section
     * @param $message
     * @param $notifyType
     */
    private function addAdminNotify($message, $notifyType)
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private static function getCrmSiteId()
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getPathToOrderList()
    {
    }
    /**
     * @param $params
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function OnAfterUserLogin($params)
    {
    }
}