<?php

namespace Bitrix\Sale\Delivery\ExtraServices;

abstract class Base
{
    protected $id;
    protected $code;
    protected $name = "";
    protected $description = "";
    protected $className = __CLASS__;
    protected $params = array();
    protected $rights = array(\Bitrix\Sale\Delivery\ExtraServices\Manager::RIGHTS_ADMIN_IDX => "N", \Bitrix\Sale\Delivery\ExtraServices\Manager::RIGHTS_MANAGER_IDX => "N", \Bitrix\Sale\Delivery\ExtraServices\Manager::RIGHTS_CLIENT_IDX => "N");
    protected $deliveryId = 0;
    protected $initial = "";
    protected $active = false;
    protected $sort = 100;
    protected $value = null;
    protected $currency = "";
    protected $operatingCurrency = "";
    public abstract function getClassTitle();
    public function __construct($id, array $initParams, $currency, $value = null, array $additionalParams = array())
    {
    }
    public function setValue($value)
    {
    }
    public function getName()
    {
    }
    public function getDescription()
    {
    }
    public function getValue()
    {
    }
    public function getEditControl($prefix = "", $value = false)
    {
    }
    public function getViewControl()
    {
    }
    /**
     * @return float
     * @deprecated
     * use \Bitrix\Sale\Delivery\ExtraServices\Base::getPriceShipment()
     */
    public function getPrice()
    {
    }
    protected function convertToOtherCurrency($value, $currency)
    {
    }
    protected function convertToOperatingCurrency($value)
    {
    }
    public static function prepareParamsToSave(array $params)
    {
    }
    public function canUserEditValue()
    {
    }
    public function canManagerEditValue()
    {
    }
    public function getAdminDefaultControl($prefix = "", $value = false)
    {
    }
    public static function getAdminParamsControl($name, array $params, $currency = "")
    {
    }
    public function isStore()
    {
    }
    public function getParams()
    {
    }
    public static function isInner()
    {
    }
    public function setOperatingCurrency($currency)
    {
    }
    public function getOperatingCurrency()
    {
    }
    public function getCode()
    {
    }
    public function getId()
    {
    }
    public function getCostShipment(\Bitrix\Sale\Shipment $shipment = null)
    {
    }
    /**
     * @return float
     * @deprecated
     * use \Bitrix\Sale\Delivery\ExtraServices\Base::getCostShipment()
     */
    public function getCost()
    {
    }
    public static function isEmbeddedOnly()
    {
    }
    public function getPriceShipment(\Bitrix\Sale\Shipment $shipment = null)
    {
    }
}