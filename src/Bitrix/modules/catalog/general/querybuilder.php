<?php

final class CProductQueryBuilder
{
    public const ENTITY_PRODUCT = 'PRODUCT';
    public const ENTITY_PRICE = 'PRICE';
    public const ENTITY_WARENHOUSE = 'WARENHOUSE';
    public const ENTITY_FLAT_PRICE = 'FLAT_PRICES';
    public const ENTITY_FLAT_WAREHNOUSE = 'FLAT_WARENHOUSES';
    public const ENTITY_FLAT_BARCODE = 'FLAT_BARCODE';
    public const ENTITY_OLD_PRODUCT = 'OLD_PRODUCT';
    public const ENTITY_OLD_PRICE = 'OLD_PRICE';
    public const ENTITY_OLD_STORE = 'OLD_STORE';
    private const ENTITY_CATALOG_IBLOCK = 'CATALOG_IBLOCK';
    private const ENTITY_VAT = 'VAT';
    private const FIELD_ALLOWED_SELECT = 0x1;
    private const FIELD_ALLOWED_FILTER = 0x2;
    private const FIELD_ALLOWED_ORDER = 0x4;
    private const FIELD_ALLOWED_ALL = self::FIELD_ALLOWED_SELECT | self::FIELD_ALLOWED_FILTER | self::FIELD_ALLOWED_ORDER;
    private const FIELD_PATTERN_OLD_STORE = '/^CATALOG_STORE_AMOUNT_([0-9]+)$/';
    private const FIELD_PATTERN_OLD_PRICE_ROW = '/^CATALOG_GROUP_([0-9]+)$/';
    private const FIELD_PATTERN_OLD_PRICE = '/^CATALOG_([A-Z][A-Z_]+)+_([0-9]+)$/';
    private const FIELD_PATTERN_OLD_PRODUCT = '/^CATALOG_([A-Z][A-Z_]+)$/';
    private const FIELD_PATTERN_FLAT_ENTITY = '/^([A-Z][A-Z_]+)$/';
    private const FIELD_PATTERN_SEPARATE_ENTITY = '/^([A-Z][A-Z_]+)_([1-9][0-9]*)$/';
    private const ENTITY_TYPE_FLAT = 0x1;
    private const ENTITY_TYPE_SEPARATE = 0x2;
    private static $entityDescription = [];
    private static $entityFields = [];
    private static $options = [];
    /**
     * @param array $filter
     * @param array $options
     * @return null|array
     */
    public static function makeFilter(array $filter, array $options = []) : ?array
    {
    }
    /**
     * @param array $parameters
     * @param array $options
     * @return array|null
     */
    public static function makeQuery(array $parameters, array $options = []) : ?array
    {
    }
    /**
     * @param string $field
     * @return bool
     */
    public static function isValidField(string $field) : bool
    {
    }
    /**
     * @param string $field
     * @return bool
     */
    public static function isRealFilterField(string $field) : bool
    {
    }
    /**
     * @param string $field
     * @return bool
     */
    public static function isCatalogFilterField(string $field) : bool
    {
    }
    /**
     * @param string $field
     * @return bool
     */
    public static function isProductFilterField(string $field) : bool
    {
    }
    /**
     * @param string $field
     * @return bool
     */
    public static function isPriceFilterField(string $field) : bool
    {
    }
    /**
     * @param string $field
     * @return bool
     */
    public static function isWarenhouseFilterField(string $field) : bool
    {
    }
    /**
     * @param array $filter
     * @param array $order
     * @param array $options
     * @return array
     */
    public static function modifyFilterFromOrder(array $filter, array $order, array $options) : array
    {
    }
    /**
     * @param string $field
     * @param int $useMode
     * @return string|null
     */
    public static function convertOldField(string $field, int $useMode) : ?string
    {
    }
    /**
     * @param array $select
     * @return array
     */
    public static function convertOldSelect(array $select) : array
    {
    }
    /**
     * @param array $filter
     * @return array
     */
    public static function convertOldFilter(array $filter) : array
    {
    }
    /**
     * @param array $order
     * @return array
     */
    public static function convertOldOrder(array $order) : array
    {
    }
    /**
     * @param string $entity
     * @param array $options
     * @return array|null
     */
    public static function getEntityFieldAliases(string $entity, array $options = []) : ?array
    {
    }
    /**
     * @return void
     */
    private static function initEntityDescription()
    {
    }
    /**
     * @return void
     */
    private static function initEntityFields()
    {
    }
    /**
     * @param string $entity
     * @param string $field
     * @return int
     */
    private static function getFieldAllowed(string $entity, string $field) : int
    {
    }
    /**
     * @param string $entity
     * @return array|null
     */
    private static function getFieldsAllowedToSelect(string $entity) : ?array
    {
    }
    /**
     * @param string $field
     * @return array|null
     */
    private static function parseField(string $field) : ?array
    {
    }
    /**
     * @param string $field
     * @param int $type
     * @return null|string
     */
    private static function searchFieldEntity(string $field, int $type) : ?string
    {
    }
    /**
     * @param int $allowed
     * @param int $action
     * @return bool
     */
    private static function checkAllowedAction(int $allowed, int $action) : bool
    {
    }
    /**
     * @param string $field
     * @param array $entityList
     * @return bool
     */
    private static function isEntityFilterField(string $field, array $entityList) : bool
    {
    }
    /**
     * @param array $field
     * @return string
     */
    private static function getEntityIndex(array $field) : string
    {
    }
    /**
     * Returns entity data for sql query.
     *
     * @param array $entity
     * @return array|null
     */
    private static function getEntityDescription(array $entity) : ?array
    {
    }
    /**
     * @param array $field
     * @return string
     */
    private static function getFieldIndex(array $field) : string
    {
    }
    /**
     * @param array $field
     * @return bool
     */
    private static function isPhantomField(array $field) : bool
    {
    }
    /**
     * @param string $entity
     * @param string $field
     * @return null|array
     */
    private static function getFieldDescription(string $entity, string $field) : ?array
    {
    }
    /**
     * @param array $queryItem
     * @param array $options
     * @return null|array
     */
    private static function getField(array $queryItem, array $options) : ?array
    {
    }
    /**
     * @param array|null $field
     * @return bool
     */
    private static function checkPreparedField($field) : bool
    {
    }
    /**
     * @param array $field
     * @return array
     */
    private static function getFieldSignature(array $field) : array
    {
    }
    /**
     * @param array &$parameters
     * @return void
     */
    private static function prepareSelectedCompatibleFields(array &$parameters)
    {
    }
    /**
     * @param array &$result
     * @param array $field
     * @return void
     */
    private static function fillCompatibleEntities(array &$result, array $field)
    {
    }
    /**
     * @param array $parameters
     * @param array $options
     * @return array|null
     */
    private static function prepareQuery(array $parameters, array $options) : ?array
    {
    }
    /**
     * @return void
     */
    private static function clearOptions()
    {
    }
    /**
     * @param array $options
     * @return void
     */
    private static function setOptions(array $options)
    {
    }
    /**
     * @param string $index
     * @return mixed|null
     */
    private static function getOption(string $index)
    {
    }
    /**
     * @param array $parameters
     * @return array|null
     */
    private static function build(array $parameters) : ?array
    {
    }
    /**
     * @param array &$result
     * @param array $list
     * @return void
     */
    private static function buildSelect(array &$result, array $list)
    {
    }
    /**
     * @param array &$result
     * @param array $list
     * @return void
     */
    private static function buildFilter(array &$result, array $list)
    {
    }
    /**
     * @param array &$result
     * @param array $list
     * @return void
     */
    private static function buildOrder(array &$result, array $list)
    {
    }
    /**
     * @param array &$result
     * @return void
     */
    private static function buildJoin(array &$result)
    {
    }
    /**
     * @param array &$list
     * @return void
     */
    private static function filterModify(array &$list)
    {
    }
    /**
     * @param array &$result
     * @param array $entity
     * @return void
     */
    private static function addJoin(array &$result, array $entity)
    {
    }
    /**
     * @param array &$item
     * @return void
     */
    private static function orderTransformField(array &$item)
    {
    }
    /**
     * Returns sql code for select QUANTITY_TRACE with converted default value.
     *
     * @param array &$parameters
     * @param array &$entity
     * @param array &$field
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpUnusedParameterInspection
     */
    private static function selectQuantityTrace(array &$parameters, array &$entity, array &$field)
    {
    }
    /**
     * Returns sql code for select CAN_BUY_ZERO with converted default value.
     *
     * @param array &$parameters
     * @param array &$entity
     * @param array &$field
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpUnusedParameterInspection
     */
    private static function selectCanBuyZero(array &$parameters, array &$entity, array &$field)
    {
    }
    /**
     * Returns sql code for select NEGATIVE_AMOUNT_TRACE with converted default value.
     *
     * @param array &$parameters
     * @param array &$entity
     * @param array &$field
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpUnusedParameterInspection
     */
    private static function selectNegativeAmountTrace(array &$parameters, array &$entity, array &$field)
    {
    }
    /**
     * Returns sql code for select SUBSCRIBE with converted default value.
     *
     * @param array &$parameters
     * @param array &$entity
     * @param array &$field
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpUnusedParameterInspection
     */
    private static function selectSubscribe(array &$parameters, array &$entity, array &$field)
    {
    }
    /**
     * Returns sql code for select field with default value.
     *
     * @param string $defaultValue
     * @return string
     */
    private static function getReplaceSqlFunction($defaultValue)
    {
    }
    /**
     * @param array &$parameters
     * @param array &$entity
     * @param array &$field
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpUnusedParameterInspection
     */
    private static function selectPriceTypeName(array &$parameters, array &$entity, array &$field)
    {
    }
    /**
     * @param array &$parameters
     * @param array &$entity
     * @param array &$field
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpUnusedParameterInspection
     */
    private static function selectPriceTypeAllowedView(array &$parameters, array &$entity, array &$field)
    {
    }
    /**
     * @param array &$parameters
     * @param array &$entity
     * @param array &$field
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpUnusedParameterInspection
     */
    private static function selectPriceTypeAllowedBuy(array &$parameters, array &$entity, array &$field)
    {
    }
    /**
     * @param array $parameters
     * @return string
     */
    private static function getPriceTypeAccess(array $parameters)
    {
    }
    /**
     * @param array &$parameters
     * @param array &$entity
     * @param array &$field
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpUnusedParameterInspection
     */
    private static function prepareFilterQuantityTrace(array &$parameters, array &$entity, array &$field)
    {
    }
    /**
     * @param array &$parameters
     * @param array &$entity
     * @param array &$field
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpUnusedParameterInspection
     */
    private static function prepareFilterCanBuyZero(array &$parameters, array &$entity, array &$field)
    {
    }
    /**
     * @param array &$parameters
     * @param array &$entity
     * @param array &$field
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpUnusedParameterInspection
     */
    private static function prepareFilterSubscribe(array &$parameters, array &$entity, array &$field)
    {
    }
    /**
     * Returns data for filtering with default values.
     *
     * @param mixed $values
     * @param string $defaultValue
     * @return mixed
     */
    private static function addDefaultValue($values, $defaultValue)
    {
    }
    /**
     * @param array &$parameters
     * @param array &$entity
     * @param array &$field
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpUnusedParameterInspection
     */
    private static function priceParametersFilter(array &$parameters, array &$entity, array &$field)
    {
    }
    /**
     * @param array &$filter
     * @param int $filterKey
     * @param array $entity
     * @param array $field
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     * @noinspection PhpUnusedParameterInspection
     */
    private static function filterModifierCurrencyScale(array &$filter, $filterKey, array $entity, array $field)
    {
    }
    /**
     * @param int $userId
     * @return array
     */
    private static function getUserGroups(int $userId) : array
    {
    }
}