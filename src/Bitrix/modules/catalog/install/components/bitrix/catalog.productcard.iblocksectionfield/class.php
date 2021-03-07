<?php

class CatalogProductCardIblockSectionField extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable, \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    private $iblockId;
    private $productId;
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
    private function hasIblockId() : bool
    {
    }
    private function hasProductId() : bool
    {
    }
    private function hasSelectedSectionIds() : bool
    {
    }
    protected function initializeSections()
    {
    }
    private function getSectionsData(array $sectionIds)
    {
    }
    private function getSelectedSections()
    {
    }
    private function loadSectionsForProduct($productId)
    {
    }
}