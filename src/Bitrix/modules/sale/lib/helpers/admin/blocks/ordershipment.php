<?php

namespace Bitrix\Sale\Helpers\Admin\Blocks;

class OrderShipment
{
    public static $shipmentObjJs = null;
    /** @var \Bitrix\Sale\Shipment */
    protected static $shipment = null;
    protected static $defaultFields = null;
    protected static $backUrl = '';
    public static function getEditTemplate($data, $index, $formType, $post)
    {
    }
    public static function getWeightUnit($siteId)
    {
    }
    public static function getWeightKoef($siteId)
    {
    }
    public function getImgDeliveryServiceList($items)
    {
    }
    public static function getDeliveryServiceProfiles($parentId)
    {
    }
    public static function initJsShipment($params)
    {
    }
    private static function getDeliveryServiceInfoById($id)
    {
    }
    public static function getDeliveryServiceList($shipment = null)
    {
    }
    private static function getMainImgPath($logotip)
    {
    }
    private static function getShortImgPath($logotip)
    {
    }
    public static function getExtraServiceEditControl($extraService, $index, $view = false, \Bitrix\Sale\Shipment $shipment = null)
    {
    }
    /**
     * @param $shipment
     * @param int $index
     * @param string $formType
     * @param array $dataForRecovery
     * @return string
     */
    public static function getEdit($shipment, $index = 0, $formType = '', $dataForRecovery = array())
    {
    }
    public static function modifyData($data)
    {
    }
    public static function getStoresList($deliveryId, $storeId)
    {
    }
    public static function getMap($deliveryId, $index, $storeId = 0, $formType = "")
    {
    }
    private static function getDeliverySelectHtml($deliveryServices, $selected = '', $index)
    {
    }
    public static function getScripts()
    {
    }
    public static function registerShipmentFieldsUpdaters()
    {
    }
    /**
     * @param $profiles
     * @param Shipment $shipment
     * @return mixed
     */
    public static function checkProfilesRestriction($profiles, $shipment)
    {
    }
    /**
     * @param $profiles
     * @param $index
     * @param int $selectedProfileId
     * @return string
     */
    public static function getProfileEditControl($profiles, $index = 1, $selectedProfileId = 0)
    {
    }
    /**
     * @param $items
     * @return array
     */
    public static function makeDeliveryServiceTree($items)
    {
    }
    /**
     * @param $deliveries
     * @param string $selected
     * @return string
     */
    public static function getTemplate($deliveries, $selected = '')
    {
    }
    /**
     * @param \Bitrix\Sale\Shipment $shipment
     * @param int $index
     * @param string $formType
     * @return string
     */
    public static function getView($shipment, $index = 0, $formType = '')
    {
    }
    /**
     * @param $data
     * @param $index
     * @param $formType
     * @return string
     * @throws Main\ArgumentNullException
     */
    public static function getViewTemplate($data, $index, $formType)
    {
    }
    protected static function renderShipmentEditLink($data)
    {
    }
    private static function getShortViewTemplate($data, $index, $logo, $formType)
    {
    }
    public static function createNewShipmentButton($params = [])
    {
    }
    /**
     * @param bool $error
     * @param bool $needRecalculate
     * @return mixed
     */
    protected static function prepareData($error = false, $needRecalculate = true)
    {
    }
    private static function getDisallowFields()
    {
    }
    /**
     * @param Order $order
     * @param array $shipments
     * @return Result
     * @throws SystemException
     */
    public static function updateData(\Bitrix\Sale\Order &$order, array $shipments)
    {
    }
    /**
     * @param Shipment $shipment
     * @return CalculationResult
     * @throws Main\ArgumentNullException
     */
    public static function calculateDeliveryPrice(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param \Bitrix\Sale\Shipment $shipment
     * @throws Main\NotSupportedException
     */
    public static function setShipmentByDefaultValues(&$shipment)
    {
    }
    public static function setBackUrl($backUrl)
    {
    }
    /**
     * @param $checkList
     *
     * @return string
     */
    public static function buildCheckHtml($checkList)
    {
    }
}