<?php

namespace Bitrix\Sale\Controller;

/*
 * Error code notation x(category1) xxx(category2) xxx(code category) xxxxx(code) - 2 000 403 00010
 * category1:
 * Intrnalizer - 100
 * Controller - 200
 * Externalazer - 300
 * */
class Controller extends \Bitrix\Main\Engine\Controller
{
    protected function isCrmModuleInstalled()
    {
    }
    protected function processBeforeAction(\Bitrix\Main\Engine\Action $action)
    {
    }
    protected function processAfterAction(\Bitrix\Main\Engine\Action $action, $result)
    {
    }
    protected static function getApplication()
    {
    }
    protected static function getNavData($start, $bORM = false)
    {
    }
    public function getBuilder(\Bitrix\Sale\Helpers\Order\Builder\SettingsContainer $settings = null)
    {
    }
    protected function getSettingsContainerDefault()
    {
    }
    protected function getFielsPropertyValuesFromRequest()
    {
    }
    protected function toArray(\Bitrix\Sale\Order $order, array $fields = [])
    {
    }
    private function getAdditionalFields(\Bitrix\Sale\Order $order)
    {
    }
    private function checkPermission($name)
    {
    }
    protected function checkReadPermissionEntity()
    {
    }
    protected function checkModifyPermissionEntity()
    {
    }
    protected function checkCreatePermissionEntity()
    {
    }
    protected function checkUpdatePermissionEntity()
    {
    }
    protected function checkDeletePermissionEntity()
    {
    }
    protected function checkPermissionEntity($name)
    {
    }
}