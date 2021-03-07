<?php

namespace Bitrix\Sale\Delivery\ExtraServices;

class Manager
{
    /** @var Base[] */
    protected $items = array();
    protected static $classes = null;
    protected static $cachedFields = array();
    const RIGHTS_ADMIN_IDX = 0;
    const RIGHTS_MANAGER_IDX = 1;
    const RIGHTS_CLIENT_IDX = 2;
    const STORE_PICKUP_CODE = 'BITRIX_STORE_PICKUP';
    const STORE_PICKUP_CLASS = '\\Bitrix\\Sale\\Delivery\\ExtraServices\\Store';
    /** @var bool  */
    protected $isClone = false;
    /**
     * Manager constructor.
     * @param array|int $initParam
     * @param string $currency
     * @param array $values
     * @param array $additionalParams
     */
    public function __construct($initParam, $currency = "", $values = array(), array $additionalParams = array())
    {
    }
    /**
     * @return array Classes list
     */
    public static function getClassesList()
    {
    }
    /**
     * @return bool|null
     * @throws SystemException
     * @throws \Bitrix\Main\LoaderException
     */
    public static function initClassesList()
    {
    }
    /**
     * @return Base[]
     */
    public function getItems()
    {
    }
    /**
     * @param int $id
     * @return Base|null
     */
    public function getItem($id)
    {
    }
    /**
     * @param $code
     * @return Base|null
     */
    public function getItemByCode($code)
    {
    }
    /**
     * @param Shipment|null $shipment
     * @return float
     */
    public function getTotalCostShipment(\Bitrix\Sale\Shipment $shipment = null)
    {
    }
    /**
     * Prepares fields for saving
     * @param $params
     * @return mixed
     */
    public static function prepareParamsToSave($params)
    {
    }
    /**
     * @param string $className
     * @param string $name
     * @param array $params
     * @return string Html for extra service administration
     * @throws ArgumentNullException
     * @throws SystemException
     */
    public static function getAdminParamsControl($className, $name, array $params)
    {
    }
    /**
     * @param array $params
     * @param string $currency
     * @param mixed $value
     * @param array $additionalParams
     * @return bool
     * @throws ArgumentNullException
     * @throws SystemException
     */
    public function addItem($params, $currency, $value = null, array $additionalParams = array())
    {
    }
    /**
     * @param array $values
     */
    public function setValues(array $values = array())
    {
    }
    /**
     * @param string $currency
     */
    public function setOperationCurrency($currency)
    {
    }
    /**
     * @param int $shipmentId
     * @param int $deliveryId
     * @return array
     */
    public static function getValuesForShipment($shipmentId, $deliveryId)
    {
    }
    /**
     * @param int $shipmentId
     * @param array $extraServices
     * @return Result
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    public static function saveValuesForShipment($shipmentId, $extraServices)
    {
    }
    /**
     * @param int $shipmentId
     * @param int $deliveryId
     * @return int
     */
    public static function getStoreIdForShipment($shipmentId, $deliveryId)
    {
    }
    /**
     * @param int $shipmentId
     * @param int $deliveryId
     * @param int $storeId
     * @return Result
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    public static function saveStoreIdForShipment($shipmentId, $deliveryId, $storeId)
    {
    }
    /**
     * @param int $deliveryId
     * @return int
     */
    protected static function getStoresValueId($deliveryId)
    {
    }
    /**
     * @param int $deliveryId
     * @param bool $onlyActive
     * @return array
     */
    public static function getStoresFields($deliveryId, $onlyActive = true)
    {
    }
    /**
     * @param int $deliveryId
     * @return array
     */
    public static function getStoresList($deliveryId)
    {
    }
    /**
     * @param int $deliveryId
     * @return Result
     * @throws \Exception
     */
    public static function deleteStores($deliveryId)
    {
    }
    /**
     * @param int $deliveryId
     * @return Result
     * @throws \Exception
     */
    public static function setStoresUnActive($deliveryId)
    {
    }
    /**
     * @param int $deliveryId
     * @param array $storesList
     * @return Result
     * @throws \Exception
     */
    public static function saveStores($deliveryId, array $storesList)
    {
    }
    /**
     * @param int $deliveryId
     * @param bool $stores
     * @return array
     * @throws SystemException
     */
    public static function getExtraServicesList($deliveryId, $stores = false)
    {
    }
    /**
     * @param array $servicesIds
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @internal
     */
    public static function prepareData(array $servicesIds)
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
    /**
     * @return float total cost
     * @deprecated
     * @use \Bitrix\Sale\Delivery\ExtraServices\Manager::getTotalCostShipment()
     */
    public function getTotalCost()
    {
    }
}