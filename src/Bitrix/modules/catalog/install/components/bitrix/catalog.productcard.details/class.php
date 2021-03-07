<?php

class CatalogProductDetailsComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable, \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    private $iblockId;
    private $productId;
    /** @var \Bitrix\Catalog\Component\ProductForm */
    private $form;
    /** @var \Bitrix\Catalog\v2\Product\BaseProduct */
    private $product;
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
    protected function placePageTitle(\Bitrix\Catalog\v2\Product\BaseProduct $product) : void
    {
    }
    protected function createProduct()
    {
    }
    protected function loadProduct($productId)
    {
    }
    protected function getProduct() : ?\Bitrix\Catalog\v2\Product\BaseProduct
    {
    }
    protected function initializeExternalProductFields(\Bitrix\Catalog\v2\Product\BaseProduct $product) : void
    {
    }
    protected function initializeProductFields(\Bitrix\Catalog\v2\Product\BaseProduct $product) : void
    {
    }
    protected function getProductDetailUrl() : string
    {
    }
    protected function getCreationPropertyUrl() : string
    {
    }
    protected function getCreationSkuPropertyLink()
    {
    }
    private function parseIsSkuProduct(array $fields, \Bitrix\Catalog\v2\Product\BaseProduct $product) : bool
    {
    }
    private function parseSkuFields(&$fields)
    {
    }
    private function parseSectionFields(&$fields)
    {
    }
    private function prepareSkuPictureFields(&$fields)
    {
    }
    private function parsePropertyFields(&$fields)
    {
    }
    private function prepareDescriptionFields(&$fields) : void
    {
    }
    private function preparePictureFields(&$fields) : void
    {
    }
    private function checkCompatiblePictureFields(\Bitrix\Catalog\v2\BaseIblockElementEntity $entity, array &$propertyFields) : void
    {
    }
    private function prepareProductCode(&$fields) : void
    {
    }
    private function prepareDetailPictureFromGrid($propertyFields)
    {
    }
    private function prepareFilePropertyFromGrid($propertyFields)
    {
    }
    private function prepareFilePropertyFromEditor($propertyFields, $descriptions, $deleted)
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
    public function refreshLinkedPropertiesAction(array $sectionIds = []) : ?array
    {
    }
    public function addPropertyAction(array $fields = []) : ?array
    {
    }
    public function updatePropertyAction(array $fields = []) : array
    {
    }
    public static function updateProperty($code, array $fields = []) : \Bitrix\Main\Result
    {
    }
    private static function getPropertyByCode($code) : array
    {
    }
    private static function updateDirectoryValues($tableName, array $values = [])
    {
    }
    public static function addProperty(array $fields) : \Bitrix\Main\Entity\AddResult
    {
    }
    private static function addDictionary(array $fields) : \Bitrix\Main\Entity\AddResult
    {
    }
    public function setCardSettingAction(string $settingId, $selected) : \Bitrix\Main\Engine\Response\AjaxJson
    {
    }
    public function setGridSettingAction(string $settingId, $selected, array $currentHeaders = []) : \Bitrix\Main\Engine\Response\AjaxJson
    {
    }
    private function getForm()
    {
    }
}