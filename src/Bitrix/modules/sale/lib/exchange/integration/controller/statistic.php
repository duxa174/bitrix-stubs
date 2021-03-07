<?php

namespace Bitrix\Sale\Exchange\Integration\Controller;

class Statistic extends \Bitrix\Rest\Integration\Controller\Base
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
    public function upsertAction(array $fields)
    {
    }
    /**
     * @param array $batch
     * @return array|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function modifyAction(array $fields)
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
    /**
     * @param $providerId
     * @param $statistics
     * @return mixed
     */
    protected function onBeforeModify($providerId, $statistics)
    {
    }
    /**
     * @param $providerId
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    protected function onAfterModify($providerId)
    {
    }
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
    protected function checkPermissionEntity($name, $arguments = [])
    {
    }
    /**
     * @param $id
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    protected function checkProviderById($id)
    {
    }
    /**
     * @param array $data
     * @return Result
     */
    protected function checkPackageLimit(array $data)
    {
    }
    /**
     * @param $id
     * @return array|false|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    protected function getProviderById($id)
    {
    }
}