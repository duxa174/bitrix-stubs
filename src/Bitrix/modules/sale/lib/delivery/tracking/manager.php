<?php

namespace Bitrix\Sale\Delivery\Tracking;

/**
 * Class Statuses
 * @package Bitrix\Sale\Delivery\Tracking
 *
 * Possible internals variants of tracking statuses
 */
class Statuses
{
    const NO_INFORMATION = 0;
    //No tracking (may be yet)
    const WAITING_SHIPMENT = 10;
    const ON_THE_WAY = 20;
    const ARRIVED = 30;
    const HANDED = 40;
    //shipping definitely finished
    const PROBLEM = 50;
    const UNKNOWN = 60;
    //Incorrect status mapping made by tracking handler.
    const RETURNED = 70;
}
/**
 * Class StatusResult
 * @package Bitrix\Sale\Delivery\Tracking
 */
class StatusResult extends \Bitrix\Sale\Result
{
    /**	@var int */
    public $status;
    /**	@var string */
    public $description;
    /** @var  string */
    public $trackingNumber;
    /**	@var int */
    public $lastChangeTimestamp;
}
/**
 * Class StatusChangeEventParam
 * @package Bitrix\Sale\Delivery\Tracking
 */
class StatusChangeEventParam
{
    /**	@var int */
    public $status;
    /**	@var string */
    public $description;
    /** @var  string */
    public $trackingNumber;
    /**	@var int */
    public $lastChangeTimestamp;
    /**	@var int */
    public $orderId;
    /**	@var int */
    public $shipmentId;
    /**	@var int */
    public $deliveryId;
}
/**
 * Class Manager
 * @package Bitrix\Sale\Delivery\Tracking
 *
 * Singleton
 *
 * All job with tracking numbers must must be done through this class
 */
class Manager
{
    protected static $instance = null;
    protected static $classNames = null;
    //If status didn't changed for a long time let's stop update it.
    protected static $activeStatusLiveTime = 5184000;
    //60 days
    /** @var bool  */
    protected $isClone = false;
    protected function __clone()
    {
    }
    protected function __construct()
    {
    }
    /**
     * @return static
     */
    public static function getInstance()
    {
    }
    /**
     * @param int $status
     * @return string
     */
    public static function getStatusName($status)
    {
    }
    /**
     * @return array
     */
    public static function getStatusesList()
    {
    }
    /**
     * @param int $deliveryId Delivery service id.
     * @param string $trackingNumber Trcking number.
     * @return string  Url were we can see tracking information.
     * @throws ArgumentNullException
     */
    public function getTrackingUrl($deliveryId, $trackingNumber = '')
    {
    }
    /**
     * @param int $shipmentId
     * @param string  $trackingNumber if changed
     * @return StatusResult
     * @throws ArgumentNullException
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getStatusByShipmentId($shipmentId, $trackingNumber = '')
    {
    }
    /**
     * Returns mapping tracking statuses to shipment statuses.
     * @return array
     * @throws ArgumentNullException
     */
    protected static function getMappedStatuses()
    {
    }
    protected static function getCheckPeriod()
    {
    }
    /**
     * @param array shipment
     * @return StatusResult
     * @throws ArgumentNullException
     * @throws SystemException
     */
    protected function getStatus($shipment)
    {
    }
    /**
     * @param $deliveryId
     * @return Base|null
     * @throws ArgumentNullException
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getTrackingObjectByDeliveryId($deliveryId)
    {
    }
    /**
     * @param string $className Class name delivered from \Bitrix\Sale\Delivery\Tracking\Base
     * @param array $params
     * @param Services\Base $deliveryService
     * @return Base
     * @throws ArgumentNullException
     * @throws SystemException
     */
    protected function createTrackingObject($className, array $params, \Bitrix\Sale\Delivery\Services\Base $deliveryService)
    {
    }
    /**
     * Starts statuses refreshing
     */
    public static function startRefreshingStatuses()
    {
    }
    /**
     * @return Result
     * todo: timelimit
     */
    protected function updateStatuses()
    {
    }
    protected function processStatusesByDelivery($deliveryId, $shipmentsData)
    {
    }
    /**
     * @param StatusChangeEventParam[] $params
     * @return Result
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\NotSupportedException
     */
    protected function processStatusChange($params)
    {
    }
    /**
     * @param StatusChangeEventParam[] $params
     * @return bool|int
     */
    protected function sendStatusChangedMail($params)
    {
    }
    /**
     * @param StatusChangeEventParam[] $params
     */
    protected function sendOnStatusesChangedEvent(array $params)
    {
    }
    /**
     * @throws SystemException
     * @throws \Bitrix\Main\LoaderException
     *
     * For custom handlers use (for example in init.php)
     * paste code like this:
     *
     * function addCustomDeliveryTrackingServices()
     * {
     *		return new \Bitrix\Main\EventResult(
     *			\Bitrix\Main\EventResult::SUCCESS,
     *			array(
     *				'\Custom\Name\Space\TrackingHandlerClass' => '/custom/path/tracking_handler_class.php'
     *			),
     *			'sale'
     *		);
     * }
     *
     * $eventManager->addEventHandler('sale', 'onSaleDeliveryTrackingClassNamesBuildList', 'addCustomDeliveryTrackingServices');
     */
    protected function initClassNames()
    {
    }
    /**
     * Returns list of known class names
     * @return array
     */
    public function getClassNames()
    {
    }
    /**
     * @param int $shipmentId
     * @param StatusResult $params
     * @return UpdateResult
     * @throws ArgumentNullException
     * @throws \Exception
     */
    public function updateShipment($shipmentId, \Bitrix\Sale\Delivery\Tracking\StatusResult $params)
    {
    }
    /**
     * @internal 
     * @param \SplObjectStorage $cloneEntity
     *
     * @return Manager
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
    /**
     * @return bool
     */
    public function isClone()
    {
    }
}