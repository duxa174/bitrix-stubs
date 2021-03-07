<?php

class ListsElementAttachedCrmComponent extends \CBitrixComponent
{
    protected $singleMode = \false;
    protected $entityIdWithPrefix;
    protected $gridAction;
    protected $listPropertyIdWithoutPrefix = array();
    protected $listElementData = array();
    protected $listElementEditPermission = array();
    protected $iblockId = 0;
    protected $listIblockId = array();
    protected $listIblockName = array();
    protected $listIblockElementId = array();
    protected $listIblockElementTemplateUrl = array();
    protected $listIblockSocnetGroupId = array();
    protected $listFields = array();
    protected $listFieldsValue = array();
    protected $listObject = array();
    protected $listIblockPermission = array();
    protected $properties = array();
    protected $selectedFields = array();
    protected $prefixGridId = 'lists_attached_crm_';
    protected $listGridId = array();
    protected $listGridOptions = array();
    protected $navigationGrid = array();
    protected $headerGrids = array();
    protected $rowGrids = array();
    protected $groupActionsGrids = array();
    protected $entityData = array();
    public function onIncludeComponentLang()
    {
    }
    protected function checkModules()
    {
    }
    public function onPrepareComponentParams($params)
    {
    }
    public function executeComponent()
    {
    }
    protected function fillParams()
    {
    }
    protected function checkGridAction()
    {
    }
    protected function performGridActionDelete()
    {
    }
    protected function checkDeletePermission($iblockId, array $listElementId)
    {
    }
    protected function getElementIdByEntityId()
    {
    }
    protected function createListElementIdByPermission()
    {
    }
    protected function setGridId()
    {
    }
    protected function getGridOptions()
    {
    }
    protected function setSelectedFields()
    {
    }
    protected function getListElement()
    {
    }
    protected function setRowGrid($iblockId, $elementId)
    {
    }
    protected function setGridGroupActions()
    {
    }
    protected function getEntityData()
    {
    }
    protected function formatResult()
    {
    }
    protected function setHeaderGrid($iblockId, $fieldId, $field)
    {
    }
    protected function setNavigationGrid($iblockId, \CIBlockResult $navObject)
    {
    }
    protected function createRowActions($iblockId, $elementId)
    {
    }
    protected function getPropertyValues($iblockId, $elementFilter = array(), $propertyFilter = array())
    {
    }
}