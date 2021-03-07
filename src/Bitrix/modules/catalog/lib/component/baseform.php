<?php

namespace Bitrix\Catalog\Component;

abstract class BaseForm
{
    public const GRID_FIELD_PREFIX = 'SKU_GRID_';
    public const PROPERTY_FIELD_PREFIX = 'PROPERTY_';
    public const PRICE_FIELD_PREFIX = 'CATALOG_GROUP_';
    public const CURRENCY_FIELD_PREFIX = 'CATALOG_CURRENCY_';
    public const MORE_PHOTO = 'MORE_PHOTO';
    private const USER_TYPE_METHOD = 'GetUIEntityEditorProperty';
    private const USER_TYPE_GET_VIEW_METHOD = 'GetUIEntityEditorPropertyViewHtml';
    private const USER_TYPE_GET_EDIT_METHOD = 'GetUIEntityEditorPropertyEditHtml';
    private const USER_TYPE_FORMAT_VALUE_METHOD = 'getFormattedValue';
    /** @var \Bitrix\Catalog\v2\BaseIblockElementEntity */
    protected $entity;
    /** @var array */
    protected $params;
    /** @var array|null */
    protected $descriptions;
    /** @var array|null */
    protected $propertyDescriptions;
    /** @var null|Crm\Product\Url\ShopBuilder */
    protected $urlBuilder = null;
    public function __construct(\Bitrix\Catalog\v2\BaseIblockElementEntity $entity, array $params = [])
    {
    }
    public function getControllers() : array
    {
    }
    protected function prepareFieldName(string $name) : string
    {
    }
    public function getValues(bool $allowDefaultValues = true) : array
    {
    }
    public function getVariationGridId() : string
    {
    }
    public function getCardSettings() : array
    {
    }
    public function getCardConfigId() : string
    {
    }
    public function getCardUserConfig() : array
    {
    }
    public function saveCardUserConfig(array $config) : bool
    {
    }
    public function getVariationIblockId() : ?int
    {
    }
    protected function getAdditionalValues(array $values) : array
    {
    }
    private function getImageValuesForEntity(\Bitrix\Catalog\v2\BaseIblockElementEntity $entity) : array
    {
    }
    private function getEntityEditPictureValues(\Bitrix\Catalog\v2\BaseIblockElementEntity $entity) : array
    {
    }
    private function getEntityViewPictureValues(\Bitrix\Catalog\v2\BaseIblockElementEntity $entity) : array
    {
    }
    protected function getFieldValue(array $field)
    {
    }
    public function getConfig() : array
    {
    }
    protected function collectFieldConfigs() : array
    {
    }
    public function getDescriptions() : array
    {
    }
    protected function buildDescriptions() : array
    {
    }
    private function getTableDescriptions(array $tableMap) : array
    {
    }
    private function getTableElementsWhiteList() : array
    {
    }
    protected function getIblockElementFieldsList() : array
    {
    }
    protected function showCatalogProductFields() : bool
    {
    }
    protected function getCatalogProductFieldsList() : array
    {
    }
    protected function showSpecificCatalogParameters() : bool
    {
    }
    private function getSpecificCatalogFieldsList() : array
    {
    }
    private function getFieldTypeByObject(\Bitrix\Main\ORM\Fields\ScalarField $field) : string
    {
    }
    private function isEditableField(\Bitrix\Main\ORM\Fields\Field $field) : bool
    {
    }
    private function isRequiredField(\Bitrix\Main\ORM\Fields\Field $field) : bool
    {
    }
    private function getFieldPlaceholders(\Bitrix\Main\ORM\Fields\Field $field) : ?array
    {
    }
    protected function showSubscribeCatalogParameters() : bool
    {
    }
    private function getSubscribeCatalogFieldList() : array
    {
    }
    private function isSpecificCatalogField(string $fieldName) : bool
    {
    }
    protected function getCatalogEnumFields(string $fieldName) : array
    {
    }
    private function getCommonEnumFields(\Bitrix\Main\ORM\Fields\EnumField $field) : array
    {
    }
    public function getIblockPropertiesDescriptions() : array
    {
    }
    protected function buildIblockPropertiesDescriptions() : array
    {
    }
    public static function preparePropertyName(string $name = '') : string
    {
    }
    public static function preparePropertyNameFromProperty(\Bitrix\Catalog\v2\Property\Property $property) : string
    {
    }
    protected function getPropertyDescription(\Bitrix\Catalog\v2\Property\Property $property) : array
    {
    }
    private function getPropertyType(\Bitrix\Catalog\v2\Property\Property $property) : string
    {
    }
    protected function getPropertiesConfigElements() : array
    {
    }
    protected function getGeneralPropertyDescription(\Bitrix\Catalog\v2\Property\Property $property) : array
    {
    }
    protected function getUserTypePropertyDescription(\Bitrix\Catalog\v2\Property\Property $property) : array
    {
    }
    private function getCurrencyList() : array
    {
    }
    protected function getPropertySettings(\Bitrix\Catalog\v2\Property\Property $property) : array
    {
    }
    protected function getFilePropertyViewHtml($value) : string
    {
    }
    /**
     * @return \CMain
     */
    protected function getApplication() : \CMain
    {
    }
    protected function getFileComponent(array $params) : string
    {
    }
    protected function getFilePropertyEditHtml(array $property, $value) : string
    {
    }
    protected function getFilePropertyInputName(array $property) : string
    {
    }
    protected function getElementPropertyEditHtml(string $name, array $propertyFields, $values, bool $bVarsFromForm = false, bool $isCopying = false) : string
    {
    }
    protected function getProductFieldValue(array $field)
    {
    }
    protected function getPropertyFieldValue(array $field)
    {
    }
    protected function getMeasures() : array
    {
    }
    protected function getVats() : array
    {
    }
}