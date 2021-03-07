<?php

namespace Bitrix\Catalog\Controller;

final class Price extends \Bitrix\Catalog\Controller\Controller
{
    //region Actions
    public function getFieldsAction()
    {
    }
    public function listAction($select = [], $filter = [], $order = [], \Bitrix\Main\UI\PageNavigation $pageNavigation)
    {
    }
    public function getAction($id)
    {
    }
    public function modifyAction($fields)
    {
    }
    public function deleteAction($id)
    {
    }
    //endregion
    protected function modify($fields)
    {
    }
    protected function modifyBefore($fields)
    {
    }
    private static function normalizeFields(array &$fields)
    {
    }
    protected function modifyValidate($fields)
    {
    }
    protected function getEntityTable()
    {
    }
    protected function exists($id)
    {
    }
    protected function deleteValidate($id)
    {
    }
    //region checkPermissionController
    protected function checkPermissionEntity($name, $arguments = [])
    {
    }
    protected function checkModifyPermissionPrice($name, $arguments)
    {
    }
    protected function checkReadPermissionEntity()
    {
    }
    //endregion
    //region checkPermissionIBlock
    private function checkPermissionIBlockElementPriceModify($productId)
    {
    }
    //endregion
}