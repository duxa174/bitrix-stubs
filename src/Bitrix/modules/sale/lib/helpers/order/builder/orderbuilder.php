<?php

namespace Bitrix\Sale\Helpers\Order\Builder;

/**
 * Class OrderBuilder
 * @package Bitrix\Sale\Helpers\Order\Builder
 * @internal
 */
abstract class OrderBuilder
{
    /** @var OrderBuilderExist|OrderBuilderNew */
    protected $delegate = null;
    /** @var BasketBuilder  */
    protected $basketBuilder = null;
    /** @var SettingsContainer */
    protected $settingsContainer = null;
    /** @var Order  */
    protected $order = null;
    /** @var array */
    protected $formData = array();
    /** @var ErrorsContainer  */
    protected $errorsContainer = null;
    /** @var bool */
    protected $isStartField;
    /** @var Registry */
    protected $registry = null;
    public function __construct(\Bitrix\Sale\Helpers\Order\Builder\SettingsContainer $settings)
    {
    }
    public function build($data)
    {
    }
    public function setBasketBuilder(\Bitrix\Sale\Helpers\Order\Builder\BasketBuilder $basketBuilder)
    {
    }
    public function getRegistry()
    {
    }
    protected function prepareFields(array $fields)
    {
    }
    public function initFields(array $data)
    {
    }
    /**
     * @param array $data
     * @return $this
     * @deprecated
     */
    public function initOrder(array $data)
    {
    }
    public function delegate()
    {
    }
    public function createOrder()
    {
    }
    protected function getSettableTradeBindingFields()
    {
    }
    protected function getSettableShipmentFields()
    {
    }
    protected function getSettablePaymentFields()
    {
    }
    protected function getSettableOrderFields()
    {
    }
    public function setFields()
    {
    }
    public function setProperties()
    {
    }
    public function setUser()
    {
    }
    public function setDiscounts()
    {
    }
    public function buildBasket()
    {
    }
    protected function createEmptyShipment()
    {
    }
    protected function removeShipments()
    {
    }
    protected function prepareFieldsStatusId($isNew, $item, $defaultFields)
    {
    }
    public function buildShipments()
    {
    }
    protected function removeShipmentItems(\Bitrix\Sale\Shipment $shipment, $products, $idsFromForm)
    {
    }
    /**
     * @param Shipment $shipment
     * @param array $shipmentBasket
     * @return Result
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\NotSupportedException
     * @throws \Bitrix\Main\ObjectNotFoundException
     * @throws \Bitrix\Main\SystemException
     * @throws \Exception
     */
    public function buildShipmentBasket(&$shipment, $shipmentBasket)
    {
    }
    protected function prepareDataForSetFields(\Bitrix\Sale\Shipment $shipment, $items)
    {
    }
    protected function modifyQuantityShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem, array $params)
    {
    }
    protected function setBarcodeShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem, array $params)
    {
    }
    protected function createEmptyPayment()
    {
    }
    protected function removePayments()
    {
    }
    public function buildPayments()
    {
    }
    public function buildTradeBindings()
    {
    }
    protected function tradingPlatformExists($id)
    {
    }
    protected function removeTradeBindings()
    {
    }
    public function finalActions()
    {
    }
    public function getOrder()
    {
    }
    public function getSettingsContainer()
    {
    }
    public function getErrorsContainer()
    {
    }
    public function getFormData($fieldName = '')
    {
    }
    public function getBasketBuilder()
    {
    }
    public static function getDefaultPersonType($siteId)
    {
    }
    public static function getBuyerTypesList($siteId)
    {
    }
    public function getUserId()
    {
    }
    protected function createUserFromFormData()
    {
    }
}