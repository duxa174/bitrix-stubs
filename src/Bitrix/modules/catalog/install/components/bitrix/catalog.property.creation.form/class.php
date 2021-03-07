<?php

class CatalogPropertyCreationFormComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable, \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    private $iblockId;
    private $propertyType;
    private $propertyId = 0;
    public function __construct($component = \null)
    {
    }
    protected function showErrors()
    {
    }
    public function configureActions()
    {
    }
    protected function listKeysSignedParameters()
    {
    }
    public function onPrepareComponentParams($params)
    {
    }
    public function executeComponent()
    {
    }
    protected function checkModules()
    {
    }
    protected function checkPermissions()
    {
    }
    protected function checkRequiredParameters()
    {
    }
    protected function setIblockId(int $iblockId) : self
    {
    }
    protected function getIblockId() : ?int
    {
    }
    private function hasIblockId() : bool
    {
    }
    protected function setPropertyType($type) : self
    {
    }
    public function getPropertyType() : ?string
    {
    }
    private function hasPropertyType() : bool
    {
    }
    protected function hasPropertyId() : bool
    {
    }
    protected function setPropertyId($id) : self
    {
    }
    public function getPropertyId() : ?int
    {
    }
    private function getPropertyVariationFeatureList() : array
    {
    }
    public function addPropertyAction(array $fields = []) : ?array
    {
    }
    public function updatePropertyAction(array $fields) : ?int
    {
    }
}