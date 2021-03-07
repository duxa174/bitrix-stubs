<?php

class CatalogProductVariationDetailsComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable, \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    private $iblockId;
    private $productId;
    private $variationId;
    /** @var \Bitrix\Catalog\Component\VariationForm */
    private $form;
    /** @var \Bitrix\Catalog\v2\Sku\BaseSku */
    private $variation;
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
    private function prepareDescriptionFields(&$fields) : void
    {
    }
    private function preparePictureFields(&$fields) : void
    {
    }
    private function parsePropertyFields(&$fields) : array
    {
    }
    private function prepareFilePropertyFromEditor($propertyFields, $descriptions, $deleted) : array
    {
    }
    private function prepareFilePropertyFromGrid($propertyFields) : array
    {
    }
    private function checkCompatiblePictureFields(\Bitrix\Catalog\v2\BaseIblockElementEntity $entity, array &$propertyFields) : void
    {
    }
    private function parsePriceFields(&$fields)
    {
    }
    private function parseMeasureRatioFields(&$fields)
    {
    }
    public function saveAction()
    {
    }
    protected function checkModules()
    {
    }
    protected function checkPermissions() : bool
    {
    }
    protected function checkRequiredParameters()
    {
    }
    private function getApplication()
    {
    }
    protected function setIblockId(int $iblockId) : self
    {
    }
    protected function getIblockId() : int
    {
    }
    private function hasIblockId() : bool
    {
    }
    protected function setProductId(int $productId) : self
    {
    }
    protected function getProductId() : int
    {
    }
    private function hasProductId() : bool
    {
    }
    protected function setVariationId(int $variationId) : self
    {
    }
    protected function getVariationId() : int
    {
    }
    private function hasVariationId() : bool
    {
    }
    protected function placePageTitle(\Bitrix\Catalog\v2\Sku\BaseSku $variation) : void
    {
    }
    protected function loadProduct()
    {
    }
    protected function getVariation()
    {
    }
    protected function loadVariation()
    {
    }
    protected function createVariation()
    {
    }
    protected function initializeVariationFields(\Bitrix\Catalog\v2\Sku\BaseSku $variation)
    {
    }
    protected function getCreationPropertyUrl() : string
    {
    }
    protected function getVariationDetailUrl() : string
    {
    }
    private function getForm()
    {
    }
    public function updatePropertyAction(array $fields) : array
    {
    }
    public function addPropertyAction(array $fields = []) : array
    {
    }
}