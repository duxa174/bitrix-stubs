<?php

namespace Bitrix\Catalog\Controller;

final class Product extends \Bitrix\Catalog\Controller\Controller
{
    public function configureActions()
    {
    }
    //region Actions
    public function getFieldsByFilterAction($filter)
    {
    }
    public function listAction($select = [], $filter = [], $order = [], $start = 0)
    {
    }
    public function getAction($id)
    {
    }
    public function addAction($fields)
    {
    }
    public function updateAction($id, array $fields)
    {
    }
    public function deleteAction($id)
    {
    }
    public function downloadAction(array $fields)
    {
    }
    //endregion Actions
    protected function splitFieldsByEntity($fields)
    {
    }
    protected function preparePropertyFields($fields)
    {
    }
    protected function preparePropertyFieldsUpdate($fields)
    {
    }
    protected function fillPropertyFieldsDefaultPropertyValues($id, $iblockId, $propertyValues)
    {
    }
    protected function exists($id)
    {
    }
    protected function get($id)
    {
    }
    protected function addValidate($fields)
    {
    }
    protected function updateValidate($fields)
    {
    }
    protected function checkFields($fields)
    {
    }
    protected function preparePropertyValues($list, $iblockId)
    {
    }
    protected function checkPermissionEntity($name, $arguments = [])
    {
    }
    protected function getAllowedFieldsProduct()
    {
    }
    protected function checkFieldsDownload($fields)
    {
    }
    public function addPropertyAction($fields)
    {
    }
    //region checkPermissionController
    protected function checkModifyPermissionEntity()
    {
    }
    protected function checkReadPermissionEntity()
    {
    }
    //endregion checkPermissionController
    //region checkPermissionIBlock
    protected function checkPermissionIBlockElementAdd($iblockId)
    {
    }
    protected function checkPermissionIBlockElementUpdate($elementId)
    {
    }
    protected function checkPermissionIBlockModify($iblockId)
    {
    }
    protected function checkPermissionIBlockElementModify($iblockId, $elementId)
    {
    }
    protected function checkPermissionIBlockElementDelete($elementId)
    {
    }
    protected function checkPermissionIBlockElementGet($elementId)
    {
    }
    protected function checkPermissionIBlockElementList($iblockId)
    {
    }
    protected function checkPermissionIBlockElementSectionBindModify($iblockId, $iblockSectionId)
    {
    }
    protected function checkPermissionIBlockElementSectionBindUpdate($iblockSectionId)
    {
    }
    protected function getIBlockBySectionId($id)
    {
    }
    //endregion
}