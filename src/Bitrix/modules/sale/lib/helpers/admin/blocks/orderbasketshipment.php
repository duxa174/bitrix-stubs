<?php

namespace Bitrix\Sale\Helpers\Admin\Blocks;

class OrderBasketShipment extends \Bitrix\Sale\Helpers\Admin\Blocks\OrderBasket
{
    protected $shipment = null;
    protected static $useStoreControl = null;
    protected $systemJsObjName = 'BX.Sale.Admin.SystemShipmentBasketObj';
    /**
     * @param \Bitrix\Sale\Shipment $shipment
     * @param string $jsObjName
     * @param string $idPrefix
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function __construct(\Bitrix\Sale\Shipment $shipment, $jsObjName = "", $idPrefix = "")
    {
    }
    public function getEdit($defTails = false)
    {
    }
    public function getView($index = 0)
    {
    }
    protected static function getDefaultVisibleColumns()
    {
    }
    /**
     * @return array
     */
    protected static function getDefaultUnShippedVisibleColumns()
    {
    }
    /**
     * @param array $inParams
     * @return array|null
     */
    public function prepareData(array $inParams = array())
    {
    }
    /**
     * @param \Bitrix\Sale\ShipmentItemCollection $shipmentItemCollection
     * @return array
     * @throws \Bitrix\Main\LoaderException
     */
    public function getProductsInfo($shipmentItemCollection)
    {
    }
    /**
     * @param $data
     * @param $request
     * @return mixed
     */
    public function modifyFromRequest($data, $request)
    {
    }
    public function getScripts($recoveryData = array())
    {
    }
    public function getViewScript($index, $visibleColumns)
    {
    }
    public static function updateData(\Bitrix\Sale\Order &$order, &$shipment, $shipmentBasket)
    {
    }
}