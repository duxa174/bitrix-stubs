<?php

namespace Bitrix\Main\Engine;

final class Resolver
{
    const DEFAULT_VENDOR = 'bitrix';
    /**
     * Returns list instance of controller and action in this controller.
     *
     * @param string $vendor
     * @param string $module
     * @param string $action
     * @param string $scope
     *
     * @return array|null
     */
    public static function getControllerAndAction($vendor, $module, $action, $scope = \Bitrix\Main\Engine\Controller::SCOPE_AJAX)
    {
    }
    private static function buildControllerClassName($vendor, $module, array $actionParts)
    {
    }
    /**
     * Returns default namespace by module.
     * @param string $module Module id.
     *
     * @return null|string
     */
    public static function getDefaultNamespaceByModule($module)
    {
    }
    /**
     * Checks if the name of action is old full qualified name.
     * For example: disk.bitrix.disk.controller.file.get.
     * @param $vendor
     * @param $module
     * @param array $actionParts
     *
     * @return bool
     */
    private static function isOldFullQualifiedName($vendor, $module, array $actionParts)
    {
    }
    private static function listAllowedNamespaces($module)
    {
    }
    private static function checkClassUnderAllowedNamespaces($module, $class)
    {
    }
    /**
     * Builds class name by vendor and module.
     * @param $vendor
     * @param $module
     * @param array $actionParts
     *
     * @return string
     */
    private static function buildClassNameByAction($vendor, $module, array $actionParts)
    {
    }
    /**
     * Returns name of controller for using in routing.
     * The name is built by rules: fully qualified name contains delimiters by dot.
     * Example: vendor:module.controller.action.
     *
     * @param Controller $controller Controller.
     *
     * @return string
     */
    public static function getNameByController(\Bitrix\Main\Engine\Controller $controller)
    {
    }
}