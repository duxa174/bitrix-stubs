<?php

namespace Bitrix\Sale\Compatible\Internals;

abstract class EntityCompatibility
{
    /** @var Compatible\OrderQuery|null */
    protected $query = null;
    /** @var array */
    protected $filter = array();
    /** @var array */
    protected $select = array();
    /** @var array|null */
    protected $group = null;
    /** @var array */
    protected $sort = array();
    /** @var array|null */
    protected $nav = null;
    /** @var null */
    protected $queryAliasList = null;
    /** @var Sale\Internals\Fields|null  */
    protected $fields = null;
    /** @var array */
    protected $rawFields = array();
    const ENTITY_ORDER = 'ORDER';
    const ENTITY_PAYMENT = 'PAYMENT';
    const ENTITY_ORDER_TABLE = 'b_sale_order';
    const ENTITY_PAYMENT_TABLE = 'b_sale_order_payment';
    protected function __construct(array $fields = array())
    {
    }
    protected static function getRegistryType()
    {
    }
    protected static function getEntity()
    {
    }
    /**
     * @internal
     * @return array
     */
    public static function getAliasFields()
    {
    }
    /**
     * @return array
     */
    protected static function getSelectFields()
    {
    }
    /**
     * @param $id
     * @return Compatible\CDBResult
     */
    public static function getById($id)
    {
    }
    /**
     * @param $sort
     * @param $filter
     * @param null|array $group
     * @param $nav
     * @param $select
     * @param $callback
     * @return Compatible\CDBResult
     */
    public static function getList($sort = array(), $filter = array(), $group = null, $nav = array(), $select = array(), $callback = false)
    {
    }
    /**
     * @param EntityCompatibility $compatibility
     * @param array $sort
     * @param array $filter
     * @param null $group
     * @param array $nav
     * @param array $select
     * @param bool $callback
     *
     * @return Compatible\CDBResult|int
     */
    protected static function setGetListParameters(\Bitrix\Sale\Compatible\Internals\EntityCompatibility $compatibility, $sort = array(), $filter = array(), $group = null, $nav = array(), $select = array(), $callback = false)
    {
    }
    /**
     * @param array $fields
     * @throws SystemException
     */
    public static function add(array $fields)
    {
    }
    /**
     * @param array $filter
     */
    public function setFilter(array $filter = array())
    {
    }
    /**
     * @param array $select
     */
    public function setSelect(array $select = array())
    {
    }
    /**
     * @param $key
     *
     * @return null|string
     */
    public function parseField($key)
    {
    }
    /**
     * @param array $group
     */
    public function setGroup($group = null)
    {
    }
    /**
     * @param array $sort
     */
    public function setSort(array $sort = array())
    {
    }
    /**
     * @param array $nav
     */
    public function setNav(array $nav = array())
    {
    }
    /**
     * @param array $callback
     */
    public function setCallback(array $callback)
    {
    }
    /**
     * @param $name
     * @param $value
     * @return bool
     */
    protected function addFilter($name, $value)
    {
    }
    /**
     * @param array $aliasList
     * @param $name
     * @param $value
     * @return bool
     */
    protected function addFilterForAlias(array $aliasList, $name, $value)
    {
    }
    /**
     * @param $name
     * @return bool
     */
    protected function addSelect($name)
    {
    }
    /**
     * @param array $aliasList
     * @return bool
     */
    protected function addSelectForAlias(array $aliasList)
    {
    }
    /**
     * @param $name
     * @param null $value
     * @return bool
     * @throws \Bitrix\Main\SystemException
     */
    protected function addQueryAlias($name, $value = null)
    {
    }
    /**
     * @return array|null
     */
    protected function getQueryAliasList()
    {
    }
    /**
     * @return Compatible\CDBResult|int
     */
    public function execute()
    {
    }
    /**
     * @param $name
     * @return null|string
     */
    public function getField($name)
    {
    }
    /**
     * @param $name
     * @param $value
     */
    public function setField($name, $value)
    {
    }
    /**
     * @return array
     */
    public function getFieldValues()
    {
    }
    /**
     * @param array $values
     */
    public function setFields(array $values)
    {
    }
    /**
     * Remove unnecessary fields
     *
     * @param array $fields             An array of fields.
     * @param array $availableFields    An array of allowed fields.
     * @return array
     */
    protected static function clearFields(array $fields, array $availableFields = array())
    {
    }
    /**
     * @internal
     * Convert an array of dates from a string to an object
     *
     * @param array $fields           The array of dates
     * @param array $dateFields An array describing the fields and types of dates
     * @return array
     */
    public static function convertDateFields(array $fields, array $dateFields = array())
    {
    }
    /**
     * Convert date from string to object
     *
     * @param string $name     Field name
     * @param string $value    Field value
     * @param array $dateFields
     *
     * @return Date|DateTime
     */
    protected static function convertDateField($name, $value, array $dateFields = array())
    {
    }
    /**
     * Convert an array of dates from the object to a string
     *
     * @param array $fields   The array of dates
     * @return array
     */
    public static function convertDateFieldsToOldFormat(array $fields)
    {
    }
    /**
     * Convert date object to a string
     *
     * @param string $value    Field value
     * @return string
     */
    protected static function convertDateFieldToOldFormat($value)
    {
    }
    /**
     * @internal
     * Convert date object to a string to format
     *
     * @param string $value    Field value
     * @param string $format
     * @return string
     */
    public static function convertDateFieldToFormat($value, $format)
    {
    }
    /**
     * @param array $fields
     * @param array $replace
     *
     * @return array
     */
    protected static function replaceFields(array $fields, array $replace = array())
    {
    }
    /**
     * @internal
     *
     * @return array
     */
    public static function getAvailableFields()
    {
    }
    /**
     * @param string $entityName
     *
     * @return bool
     */
    protected static function checkEntityName($entityName)
    {
    }
    /**
     * @param $entityName
     * @param array $fields
     * @param array $availableFields
     *
     * @return array
     * @throws ArgumentOutOfRangeException
     */
    protected function parseRawFields($entityName, array $fields, array $availableFields = array())
    {
    }
    /**
     * @param $entity
     * @param $entityName
     *
     * @return Sale\Result
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws ObjectNotFoundException
     */
    public function saveRawFields($entity, $entityName)
    {
    }
    /**
     * @param $entityName
     * @param array $fields
     * @param string $separator
     *
     * @return array
     * @throws ArgumentOutOfRangeException
     */
    public static function backRawField($entityName, array $fields, $separator = '=')
    {
    }
    protected function getWhiteListFields()
    {
    }
    /**
     * @param $fieldName
     *
     * @return bool
     */
    protected function checkWhiteListFields($fieldName)
    {
    }
}