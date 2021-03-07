<?php

namespace Bitrix\Sale\Delivery\ExtraServices;

class Enum extends \Bitrix\Sale\Delivery\ExtraServices\Base
{
    public function __construct($id, array $structure, $currency, $value = null, array $additionalParams = array())
    {
    }
    public function getClassTitle()
    {
    }
    public function getCost()
    {
    }
    public static function prepareParamsToSave(array $params)
    {
    }
    public static function getAdminParamsName()
    {
    }
    public static function getAdminParamsControl($name, array $params, $currency = "")
    {
    }
    protected static function getValueHtml($name, $id, $title = "", $price = "", $currency = "")
    {
    }
    protected static function getJSPrice(array $prices)
    {
    }
    public function setOperatingCurrency($currency)
    {
    }
    protected function createOptions()
    {
    }
    public function getEditControl($prefix = "", $value = false)
    {
    }
    public function getViewControl()
    {
    }
    protected function createJSOnchange($id, array $prices)
    {
    }
}