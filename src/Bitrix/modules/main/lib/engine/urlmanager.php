<?php

namespace Bitrix\Main\Engine;

final class UrlManager
{
    const AJAX_END_POINT = '/bitrix/services/main/ajax.php';
    const ABSOLUTE_URL = true;
    /** @var UrlManager */
    private static $instance;
    private function __clone()
    {
    }
    private function __construct()
    {
    }
    /**
     * @return UrlManager
     */
    public static function getInstance()
    {
    }
    /**
     * Creates uri for the action.
     *
     * @param string $action The fully qualified action name.
     * @param array $params Additional parameters for action.
     *
     * @param bool $absolute Generate absolute uri or not.
     *
     * @return Uri
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function create($action, $params = [], $absolute = false)
    {
    }
    /**
     * Creates uri for the controller and it's action.
     *
     * @param Controller $controller Controller.
     * @param string $action Relative action name.
     * @param array $params Additional parameters for action.
     *
     * @param bool $absolute Generate absolute uri or not.
     *
     * @return Uri
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function createByController(\Bitrix\Main\Engine\Controller $controller, $action, $params = array(), $absolute = false)
    {
    }
    protected function getVendorAndModule($moduleId)
    {
    }
    /**
     * Creates uri for the controller in component and it's action.
     *
     * @param Controller $controller Controller.
     * @param string $action Relative action name.
     * @param array $params Additional parameters for action.
     *
     * @param bool $absolute Generate absolute uri or not.
     *
     * @return Uri
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \ReflectionException
     */
    public function createByComponentController(\Bitrix\Main\Engine\Controller $controller, $action, $params = array(), $absolute = false)
    {
    }
    /**
     * Creates uri for the bitrix component which implements @see \Bitrix\Main\Engine\Contract\Controllerable
     * and it's action.
     *
     * @param \CBitrixComponent $component
     * @param string $action Relative action name.
     * @param array $params Additional parameters for action.
     *
     * @param bool $absolute Generate absolute uri or not.
     *
     * @return Uri
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function createByBitrixComponent(\CBitrixComponent $component, $action, $params = array(), $absolute = false)
    {
    }
    /**
     * Returns uri for the end point.
     *
     * @param bool $absolute Generate absolute uri or not.
     *
     * @return Uri
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function getEndPoint($absolute = false)
    {
    }
    /**
     * Returns host url with port and scheme.
     *
     * @return string
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function getHostUrl()
    {
    }
}