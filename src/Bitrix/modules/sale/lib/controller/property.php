<?php

namespace Bitrix\Sale\Controller;

class Property extends \Bitrix\Sale\Controller\Controller
{
    protected $property;
    protected $dbProperty;
    protected $propertySettings;
    protected $errors = [];
    protected $personTypeId;
    protected $siteId;
    //region Actions
    public function getFieldsByTypeAction($type)
    {
    }
    public function updateAction($id, array $fields)
    {
    }
    public function getAction($id)
    {
    }
    public function deleteAction($id)
    {
    }
    public function listAction($select = [], $filter = [], $order = [], \Bitrix\Main\UI\PageNavigation $pageNavigation)
    {
    }
    public function addAction($fields)
    {
    }
    //endregion
    protected function checkFileds($fields)
    {
    }
    public function getTypes()
    {
    }
    protected function exists($id)
    {
    }
    protected function get($id)
    {
    }
    protected function getPropertyGroupOptions()
    {
    }
    protected function getPersonType($personTypeId)
    {
    }
    protected static function getCommonFields()
    {
    }
    protected function getCommonSettings()
    {
    }
    protected function getInputSettings($property)
    {
    }
    protected function getStringSettings()
    {
    }
    protected function getLocationSettings()
    {
    }
    protected function getVariantSettings()
    {
    }
    protected function getRelationSettings()
    {
    }
    protected function checkMultipleField($property)
    {
    }
    protected function modifyInputSettingsByType(&$propertySettings)
    {
    }
    protected function initializePropertySettings()
    {
    }
    protected function validateFields()
    {
    }
    protected function validateVariants()
    {
    }
    protected function validateRelations()
    {
    }
    protected function validateProperty()
    {
    }
    protected function hasErrors()
    {
    }
    protected function saveRelations()
    {
    }
    protected function saveProperty()
    {
    }
    protected function saveFiles(&$property)
    {
    }
    protected function initializeDbProperty($propertyId)
    {
    }
    protected function loadProperty($propertyId)
    {
    }
    protected function modifyDataDependedByType($property)
    {
    }
    protected function modifyRelationsDataDependedByType($property)
    {
    }
    protected function updateProperty($propertiesToSave)
    {
    }
    protected function addProperty($propertiesToSave)
    {
    }
    protected function cleanUpFiles($savedFiles)
    {
    }
    protected function saveVariants()
    {
    }
    public static function prepareFields(array $fields)
    {
    }
    protected function checkPermissionEntity($name)
    {
    }
}