<?php

class CatalogProductVariationGridComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable, \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    public const HEADER_EMPTY_PROPERTY_COLUMN = 'EMPTY_PROPERTIES';
    /** @var \Bitrix\Catalog\v2\Product\BaseProduct */
    private $product;
    /** @var \Bitrix\Catalog\Component\GridVariationForm */
    private $defaultForm;
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
    protected function getProduct() : \Bitrix\Catalog\v2\Product\BaseProduct
    {
    }
    public function getIblockId() : int
    {
    }
    public function getProductId() : int
    {
    }
    public function isNewProduct() : bool
    {
    }
    protected function checkModules() : bool
    {
    }
    protected function checkPermissions() : bool
    {
    }
    protected function checkProduct() : bool
    {
    }
    public function isAjaxGridAction(\Bitrix\Main\Request $request = \null) : bool
    {
    }
    public function doAjaxGridAction(\Bitrix\Main\Request $request)
    {
    }
    private function processGridActions(\Bitrix\Main\Request $request) : void
    {
    }
    private function processGridDelete(array $ids, bool $allRows = \false) : void
    {
    }
    private function hasSkuProperties(\Bitrix\Catalog\v2\Sku\SkuCollection $skuCollection) : bool
    {
    }
    public function executeComponent()
    {
    }
    protected function initializeVariantsGrid()
    {
    }
    public function getGridId() : ?string
    {
    }
    private function getDefaultVariationRowForm() : ?\Bitrix\Catalog\Component\GridVariationForm
    {
    }
    protected function getPropertyModifyLink()
    {
    }
    private function getIblockPropertiesDescriptions() : array
    {
    }
    private function getGridOptions() : \CGridOptions
    {
    }
    public function getGridOptionsSorting() : array
    {
    }
    protected function getVariationLink(?int $skuId) : ?string
    {
    }
    protected function getGridRows() : array
    {
    }
    protected function getGridEditData(array $rows) : array
    {
    }
    public static function formatFieldName($name)
    {
    }
    protected function getHiddenProperties()
    {
    }
    protected function getGridNavObject()
    {
    }
    protected function getGridActionPanel()
    {
    }
    protected function getGridData()
    {
    }
    protected function getCreateVariationLink()
    {
    }
    private function canHaveSku()
    {
    }
    protected function initializeExternalProductFields(\Bitrix\Catalog\v2\Product\BaseProduct $product) : void
    {
    }
}