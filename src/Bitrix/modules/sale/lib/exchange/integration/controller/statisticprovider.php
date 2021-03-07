<?php

namespace Bitrix\Sale\Exchange\Integration\Controller;

class StatisticProvider extends \Bitrix\Rest\Integration\Controller\Base
{
    //region Actions
    public function getFieldsAction()
    {
    }
    /**
     * @param array $select
     * @param array $filter
     * @param array $order
     * @param PageNavigation $pageNavigation
     * @return Page
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function listAction($select = [], $filter = [], $order = [], \Bitrix\Main\UI\PageNavigation $pageNavigation)
    {
    }
    /**
     * @param $id
     * @return array|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getAction($id)
    {
    }
    /**
     * @param array $fields
     * @return array|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function addAction(array $fields)
    {
    }
    /**
     * @param $id
     * @param array $fields
     * @return array|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function updateAction($id, array $fields)
    {
    }
    /**
     * @param $id
     * @return bool|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function deleteAction($id)
    {
    }
    //endregion
    protected function createViewManager(\Bitrix\Main\Engine\Action $action)
    {
    }
    protected function getEntityTable()
    {
    }
    protected function checkReadPermissionEntity()
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
}