<?php

namespace Bitrix\Sale\Delivery\Inputs;

class Period extends \Bitrix\Sale\Internals\Input\Base
{
    public static function getViewHtmlSingle(array $input, $values)
    {
    }
    public static function getEditHtmlSingle($name, array $input, $values)
    {
    }
    public static function getError(array $input, $values)
    {
    }
    public static function getErrorSingle(array $input, $values)
    {
    }
    public static function getValueSingle(array $input, $userValue)
    {
    }
    public static function getSettings(array $input, $reload)
    {
    }
    protected static function checkArgs(array $input, array $values)
    {
    }
}
class ReadOnly extends \Bitrix\Sale\Internals\Input\Base
{
    public static function getViewHtmlSingle(array $input, $value)
    {
    }
    public static function getEditHtmlSingle($name, array $input, $value)
    {
    }
    public static function getError(array $input, $values)
    {
    }
    public static function getErrorSingle(array $input, $values)
    {
    }
    public static function getValueSingle(array $input, $userValue)
    {
    }
    public static function getSettings(array $input, $reload)
    {
    }
}
class MultiControlString extends \Bitrix\Sale\Internals\Input\Base
{
    protected $items = array();
    protected $myParams = array();
    protected $myKey = array();
    public function addItem($key, array $control)
    {
    }
    public function setParams($key, array $params)
    {
    }
    public function getParams()
    {
    }
    public function setKey($key)
    {
    }
    public function getKey()
    {
    }
    public function isClean()
    {
    }
    public function clean()
    {
    }
    public static function getViewHtmlSingle(array $input, $values)
    {
    }
    public static function getEditHtmlSingle($name, array $input, $values)
    {
    }
    public static function getErrorSingle(array $input, $values)
    {
    }
    public static function getValueSingle(array $input, $userValue)
    {
    }
    public static function getSettings(array $input, $reload)
    {
    }
    /** Get single value.
     * @param $value
     * @return mixed - if value is multiple, get first meaningful value (which is not null)
     */
    static function asSingle($value)
    {
    }
    /**
     * @inherit
     */
    public static function getError(array $input, $value)
    {
    }
    /**
     * @inherit
     */
    public static function getRequiredError(array $input, $value)
    {
    }
}
class LocationMulti extends \Bitrix\Sale\Internals\Input\Base
{
    protected static $d2LClass = '\\Bitrix\\Sale\\Delivery\\DeliveryLocationTable';
    public static function getViewHtml(array $input, $value = null)
    {
    }
    public static function getEditHtml($name, array $input, $values = null)
    {
    }
    public static function getError(array $input, $values)
    {
    }
    public static function getValueSingle(array $input, $userValue)
    {
    }
    public static function getSettings(array $input, $reload)
    {
    }
}
class LocationMultiExclude extends \Bitrix\Sale\Delivery\Inputs\LocationMulti
{
    protected static $d2LClass = '\\Bitrix\\Sale\\Delivery\\DeliveryLocationExcludeTable';
}
class ProductCategories extends \Bitrix\Sale\Internals\Input\Base
{
    public static function getViewHtml(array $input, $values = null)
    {
    }
    public static function getEditHtml($name, array $input, $values = null)
    {
    }
    protected static function getCategoriesList($ids)
    {
    }
    public static function getValueSingle(array $input, $userValue)
    {
    }
    public static function getError(array $input, $values)
    {
    }
    public static function getErrorSingle(array $input, $values)
    {
    }
    public static function getSettings(array $input, $reload)
    {
    }
}
class ButtonSelector extends \Bitrix\Sale\Internals\Input\Base
{
    public static function getViewHtmlSingle(array $input, $values)
    {
    }
    public static function getEditHtmlSingle($name, array $input, $values)
    {
    }
    public static function getValueSingle(array $input, $userValue)
    {
    }
    public static function getSettings(array $input, $reload)
    {
    }
    public static function getError(array $input, $values)
    {
    }
    public static function getErrorSingle(array $input, $values)
    {
    }
    static function asSingle($value)
    {
    }
}