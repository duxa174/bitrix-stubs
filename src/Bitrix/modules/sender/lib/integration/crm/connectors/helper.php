<?php

namespace Bitrix\Sender\Integration\Crm\Connectors;

/**
 * Class Helper
 * @package Bitrix\Sender\Integration\Crm\Connectors
 */
class Helper
{
    public static $runtimeByEntity = [];
    private const PERSONALIZE_NAMESPACE = "\\Bitrix\\Sender\\Integration\\Crm\\Connectors\\Personalize\\";
    /**
     * Create Orm expression field for selecting multi field.
     *
     * @param string $entityName Entity name.
     * @param string $multiFieldTypeId Multi-field type ID.
     * @return Orm\Fields\ExpressionField
     */
    public static function createExpressionMultiField($entityName, $multiFieldTypeId)
    {
    }
    /**
     * Get personalize field list.
     *
     * @return array
     */
    public static function getPersonalizeList()
    {
    }
    public static function buildPersonalizeList($entityType)
    {
    }
    public static function getData($entityType, $entityIds, $fields = ['*'])
    {
    }
    public static function getPersonalizeFieldsFromConnectors($isTrigger = false)
    {
    }
    /**
     * Get filter user fields.
     *
     * @param integer $entityTypeId Entity type ID.
     * @return array
     */
    public static function getFilterUserFields($entityTypeId)
    {
    }
    /**
     * Prepare query select.
     *
     * @param Entity\Query $query Query.
     * @param integer $dataTypeId Data type ID.
     * @return Entity\Query
     */
    public static function prepareQuery(\Bitrix\Main\Entity\Query $query, $dataTypeId = null)
    {
    }
    protected static function getImSqlExpression(\Bitrix\Main\Entity\Query $query)
    {
    }
    /**
     * Get runtime by entity.
     *
     * @param string $entityTypeName Entity type name.
     * @return Entity\ExpressionField[]
     */
    public static function getRuntimeByEntity($entityTypeName = '')
    {
    }
    protected static function processRuntimeFilter(array &$filter, $entityTypeName = '')
    {
    }
    /**
     * Get filter by entity.
     *
     * @param array $fields Fields.
     * @param array $values Values.
     * @param array $entityTypeNames Entity type names.
     * @return array
     */
    public static function getFilterByEntity(array $fields = array(), array $values = array(), array $entityTypeNames = array())
    {
    }
    private static function isFieldFilterable(array $field = array(), array $values = array())
    {
    }
    /**
     * Get filter by fields.
     *
     * @param array $fields Fields.
     * @param array $values Values.
     * @param string $entityTypeName Entity type name.
     * @return array
     */
    public static function getFilterByFields(array $fields = array(), array $values = array(), $entityTypeName = '')
    {
    }
    protected static function getFilterFieldKey(array $field)
    {
    }
    protected static function isFieldTypeFilter($type)
    {
    }
    protected static function setFieldTypeFilter($filterKey, array $fieldData, &$filter)
    {
    }
    protected static function getCommunicationTypeFilter(array $commTypes, &$filter, $extraCallbackParams = [])
    {
    }
    protected static function getNoPurchasesFilter($value, &$filter, $extraCallbackParams = [])
    {
    }
    protected static function productSourceFilter($value, &$filter, $extraCallbackParams = [])
    {
    }
    protected static function getDealCategoryFilter($values, &$filter, $extraCallbackParams = [])
    {
    }
    /**
     * Callback on draw of result view.
     *
     * @param array &$row Row.
     * @return void
     */
    public function onResultViewDraw(array &$row)
    {
    }
    protected function getCrmStatusName($statusType, $statusId)
    {
    }
    protected function getResultViewTitle($entityTypeId, $entityId, $title, $secondTitle = null, $thirdTitle = null)
    {
    }
    protected function getPathToDetail($entityTypeId, $entityId)
    {
    }
    public static function isCrmSaleEnabled()
    {
    }
}