<?php

namespace Bitrix\Sale\Controller;

class BusinessValuePersonDomain extends \Bitrix\Sale\Controller\Controller
{
    //region Actions
    public function getFieldsAction()
    {
    }
    public function listAction($select = [], $filter = [], $order = [], \Bitrix\Main\UI\PageNavigation $pageNavigation)
    {
    }
    public function addAction(array $fields)
    {
    }
    /** @deprecated  */
    public function getAction($personTypeId)
    {
    }
    /** @deprecated  */
    public function deleteAction($personTypeId)
    {
    }
    public function deleteByFilterAction($fields)
    {
    }
    //endregion
    protected function getPersonType($id)
    {
    }
    protected function personTypeExists($id)
    {
    }
    protected function get($personTypeId)
    {
    }
    protected function exists($personTypeId)
    {
    }
    protected function existsByFilter($filter)
    {
    }
    protected function checkFields($fields)
    {
    }
    protected function checkPermissionEntity($name)
    {
    }
}