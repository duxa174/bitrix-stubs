<?php

namespace Bitrix\Catalog\Grid\Panel;

class ProductGroupAction extends \Bitrix\Iblock\Grid\Panel\GroupAction
{
    private const FIELD_ID_PREFIX = 'product_';
    private const FIELD_NAME_PREFIX = 'PRODUCT_';
    private const PRODUCT_FIELD_NAME = 'PRODUCT_FIELD_NAME';
    /** @var bool */
    protected $catalogIncluded = null;
    protected $catalogOptions = [];
    /** @var array */
    protected $catalogConfig = null;
    protected $productFieldHandlers = [];
    public function __construct(array $options)
    {
    }
    /**
     * @return void
     */
    protected function initConfig()
    {
    }
    /**
     * @return void
     */
    protected function initProductFieldHandlers()
    {
    }
    /**
     * @return array
     */
    protected function getActionHandlers()
    {
    }
    /**
     * @param array $params
     * @return array|null
     */
    protected function actionProductFieldPanel(array $params = [])
    {
    }
    /**
     * @return array|null
     */
    protected function actionProductFieldRequest()
    {
    }
    /**
     * @param array $params
     * @return array|null
     */
    protected function actionProductChangePricePanel(array $params = [])
    {
    }
    /**
     * @return array|null
     */
    protected function actionProductChangePriceRequest()
    {
    }
    /**
     * @return string
     */
    protected function getFormProductFieldName()
    {
    }
    /**
     * @return string
     */
    protected function getFormProductFieldId()
    {
    }
    /**
     * @param string $field
     * @return string
     */
    protected function getFormRowFieldName(string $field)
    {
    }
    /**
     * @param string $field
     * @return string
     */
    protected function getFormRowFieldId(string $field)
    {
    }
    /**
     * @param bool $defaultState
     * @return array
     */
    protected static function getStatusList(bool $defaultState)
    {
    }
    /**
     * @return array
     */
    protected static function getBinaryList()
    {
    }
    /**
     * @return bool
     */
    protected function isAllowedProductActions()
    {
    }
    /**
     * @param string $fieldId
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function getInputField(string $fieldId)
    {
    }
    /**
     * @param string $fieldId
     * @param array $list
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function getDropdownField(string $fieldId, array $list)
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldWeightRow()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldWeightRequest()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldQuantityTraceRow()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldQuantityTraceRequest()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldCanBuyZeroRow()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldCanBuyZeroRequest()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldQuantityRow()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldQuantityRequest()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldPurchasingPriceRow()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldPurchasingPriceRequest()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldVatIncludedRow()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldVatIncludedRequest()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldVatIdRow()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldVatIdRequest()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldSubscribeRow()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldSubscribeRequest()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldMeasureRow()
    {
    }
    /**
     * @return array|null
     */
    protected function getProductFieldMeasureRequest()
    {
    }
    /**
     * Returns float value or null for data entered in user form.
     * @internal
     *
     * @param $value
     * @return float|null
     */
    protected static function checkFloatValue($value)
    {
    }
    /**
     * Returns float value or null for price data entered in user form. Need for php7.
     * @internal
     *
     * @param string|int|float $value		Float value from form.
     * @return float|null|string
     */
    protected static function checkEmptyFloatValue($value)
    {
    }
    /**
     * @param string $value
     * @return bool
     */
    protected static function checkStatusValue($value)
    {
    }
    /**
     * @param string $value
     * @return bool
     */
    protected static function checkBinaryValue($value)
    {
    }
    /**
     * Returns int value or null for data entered in user form.
     * @internal
     *
     * @param string|int $value		Integer value from form.
     * @return int|null
     */
    protected static function checkIntValue($value)
    {
    }
}