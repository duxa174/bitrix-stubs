<?php

namespace Bitrix\Catalog\Controller;

final class Section extends \Bitrix\Catalog\Controller\Controller
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
    public function addAction($fields)
    {
    }
    public function updateAction($id, array $fields)
    {
    }
    public function deleteAction($id)
    {
    }
    //endregion
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
    //region checkPermissionController
    protected function checkModifyPermissionEntity()
    {
    }
    protected function checkReadPermissionEntity()
    {
    }
    //endregion
    //region checkPermissionIBlock
    protected function checkPermissionIBlockSectionAdd($iblockId)
    {
    }
    protected function checkPermissionIBlockSectionUpdate($sectionId)
    {
    }
    protected function checkPermissionIBlockSectionModify($iblockId, $sectionId)
    {
    }
    protected function checkPermissionIBlockSectionSectionBindModify($iblockId, $iblockSectionId)
    {
    }
    protected function checkPermissionIBlockSectionSectionBindUpdate($iblockSectionId)
    {
    }
    protected function checkPermissionIBlockSectionDelete($sectionId)
    {
    }
    protected function checkPermissionIBlockSectionGet($sectionId)
    {
    }
    protected function checkPermissionIBlockSectionList($iblockId)
    {
    }
    protected function getIBlockBySectionId($id)
    {
    }
    //endregion
}