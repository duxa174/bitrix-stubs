<?php

namespace Bitrix\Rest\Integration\Controller;

class Base extends \Bitrix\Main\Engine\Controller
{
    protected $viewManager;
    /**
     * @param $actionName
     * @return Engine\ClosureAction|Engine\InlineAction|null
     * @throws SystemException
     */
    protected function create($actionName)
    {
    }
    /**
     * @param Action $action
     * @throws NotImplementedException
     */
    protected function createViewManager(\Bitrix\Main\Engine\Action $action)
    {
    }
    /**
     * @return array
     */
    public function configureActions()
    {
    }
    /**
     * @return ViewManager
     */
    public function getViewManager()
    {
    }
    /**
     * @param Action $action
     * @return bool|null
     * @throws NotImplementedException
     * @throws SystemException
     */
    protected function processBeforeAction(\Bitrix\Main\Engine\Action $action)
    {
    }
    protected function processAfterAction(\Bitrix\Main\Engine\Action $action, $result)
    {
    }
    /**
     * @param $name
     * @param array $arguments
     * @return Result
     * @throws NotImplementedException
     */
    private function checkPermission($name, $arguments = [])
    {
    }
    /**
     * @throws NotImplementedException
     */
    protected function checkGetFieldsPermissionEntity()
    {
    }
    /**
     * @throws NotImplementedException
     */
    protected function checkReadPermissionEntity()
    {
    }
    /**
     * @return Result
     * @throws NotImplementedException
     */
    protected function checkModifyPermissionEntity()
    {
    }
    /**
     * @return Result
     * @throws NotImplementedException
     */
    protected function checkCreatePermissionEntity()
    {
    }
    /**
     * @return Result
     * @throws NotImplementedException
     */
    protected function checkUpdatePermissionEntity()
    {
    }
    /**
     * @return Result
     * @throws NotImplementedException
     */
    protected function checkDeletePermissionEntity()
    {
    }
    /**
     * @param $name
     * @param array $arguments
     * @return Result
     * @throws NotImplementedException
     */
    protected function checkPermissionEntity($name, $arguments = [])
    {
    }
    /**
     * @return \Bitrix\Main\Entity\DataManager
     * @throws NotImplementedException
     */
    protected function getEntityTable()
    {
    }
    /**
     * @param $select
     * @param $filter
     * @param $order
     * @param PageNavigation $pageNavigation
     * @return array
     * @throws NotImplementedException
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    protected function getList($select, $filter, $order, \Bitrix\Main\UI\PageNavigation $pageNavigation)
    {
    }
    /**
     * @param $filter
     * @return int
     * @throws NotImplementedException
     * @throws SystemException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    protected function count($filter)
    {
    }
    /**
     * @param $id
     * @return array|false
     * @throws NotImplementedException
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    protected function get($id)
    {
    }
    /**
     * @param array $fields
     * @return \Bitrix\Main\ORM\Data\AddResult
     * @throws NotImplementedException
     */
    public function add(array $fields)
    {
    }
    /**
     * @param $id
     * @param array $fields
     * @return \Bitrix\Main\ORM\Data\UpdateResult|null
     * @throws NotImplementedException
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    protected function update($id, array $fields)
    {
    }
    /**
     * @param $id
     * @return \Bitrix\Main\ORM\Data\DeleteResult|null
     * @throws NotImplementedException
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    protected function delete($id)
    {
    }
    /**
     * @param $id
     * @return Result
     * @throws NotImplementedException
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    protected function exists($id)
    {
    }
    /**
     * @param $filter
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    protected function existsByFilter($filter)
    {
    }
}