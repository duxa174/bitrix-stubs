<?php

namespace Bitrix\Main\ORM;

/**
 * Base entity
 */
class Entity
{
    /** @var DataManager */
    protected $className;
    protected $module, $name, $connectionName, $dbTableName, $primary, $autoIncrement;
    protected $uf_id, $isUts, $isUtm;
    /** @var Field[] */
    protected $fields;
    protected $fieldsMap;
    /** @var UField[] */
    protected $u_fields;
    /** @var string Unique code */
    protected $code;
    protected $references;
    /** @var static[] */
    protected static $instances;
    /** @var bool */
    protected $isClone = false;
    const DEFAULT_OBJECT_PREFIX = 'EO_';
    /**
     * Returns entity object
     *
     * @param $entityName
     *
     * @return Entity
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function get($entityName)
    {
    }
    /**
     * Checks if entity exists
     *
     * @param $entityName
     *
     * @return bool
     */
    public static function has($entityName)
    {
    }
    /**
     * @static
     *
     * @param string $entityName
     *
     * @return Entity
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function getInstance($entityName)
    {
    }
    /**
     * @param DataManager|string $className
     *
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected static function getInstanceDirect($className)
    {
    }
    /**
     * Fields factory
     *
     * @param string $fieldName
     * @param array|Field $fieldInfo
     *
     * @return Field
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function initializeField($fieldName, $fieldInfo)
    {
    }
    public function initialize($className)
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function postInitialize()
    {
    }
    /**
     * Returns class of Object for current entity.
     *
     * @return EntityObject|string
     */
    public function getObjectClass()
    {
    }
    /**
     * Returns class name of Object for current entity.
     *
     * @return EntityObject|string
     */
    public function getObjectClassName()
    {
    }
    public static function getDefaultObjectClassName($entityName)
    {
    }
    /**
     * @return Collection|string
     */
    public function getCollectionClass()
    {
    }
    /**
     * @return Collection|string
     */
    public function getCollectionClassName()
    {
    }
    public static function getDefaultCollectionClassName($entityName)
    {
    }
    /**
     * @param bool $setDefaultValues
     *
     * @return null Actual type should be annotated by orm:annotate
     */
    public function createObject($setDefaultValues = true)
    {
    }
    /**
     * @return null Actual type should be annotated by orm:annotate
     */
    public function createCollection()
    {
    }
    /**
     * @see EntityObject::wakeUp()
     *
     * @param $row
     *
     * @return null Actual type should be annotated by orm:annotate
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function wakeUpObject($row)
    {
    }
    /**
     * @see Collection::wakeUp()
     *
     * @param $rows
     *
     * @return null Actual type should be annotated by orm:annotate
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function wakeUpCollection($rows)
    {
    }
    /**
     * @param Field $field
     *
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function appendField(\Bitrix\Main\ORM\Fields\Field $field)
    {
    }
    /**
     * @param array|Field $fieldInfo
     * @param null|string $fieldName
     *
     * @return Field|false
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function addField($fieldInfo, $fieldName = null)
    {
    }
    public function getReferencesCountTo($refEntityName)
    {
    }
    public function getReferencesTo($refEntityName)
    {
    }
    // getters
    public function getFields()
    {
    }
    /**
     * @param $name
     *
     * @return Field|ScalarField
     * @throws Main\ArgumentException
     */
    public function getField($name)
    {
    }
    public function hasField($name)
    {
    }
    /**
     * @return ScalarField[]
     */
    public function getScalarFields()
    {
    }
    /**
     * @deprecated
     *
     * @param $name
     *
     * @return UField
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function getUField($name)
    {
    }
    /**
     * @deprecated
     *
     * @param $name
     *
     * @return bool
     * @throws Main\SystemException
     */
    public function hasUField($name)
    {
    }
    public function getName()
    {
    }
    public function getFullName()
    {
    }
    public function getNamespace()
    {
    }
    public function getModule()
    {
    }
    /**
     * @return DataManager
     */
    public function getDataClass()
    {
    }
    /**
     * @return Main\DB\Connection
     * @throws Main\SystemException
     */
    public function getConnection()
    {
    }
    public function getDBTableName()
    {
    }
    public function getPrimary()
    {
    }
    public function getPrimaryArray()
    {
    }
    public function getAutoIncrement()
    {
    }
    public function isUts()
    {
    }
    public function isUtm()
    {
    }
    public function getUfId()
    {
    }
    /**
     * @param Query $query
     *
     * @return Query
     */
    public function setDefaultScope($query)
    {
    }
    public static function isExists($name)
    {
    }
    /**
     * @param $entityName
     *
     * @return string|DataManager
     */
    public static function normalizeEntityClass($entityName)
    {
    }
    public static function getEntityClassParts($class)
    {
    }
    public function getCode()
    {
    }
    public function getLangCode()
    {
    }
    public function getTitle()
    {
    }
    /**
     * @deprecated Use Bitrix\StringHelper::camel2snake instead
     *
     * @param $str
     *
     * @return string
     */
    public static function camel2snake($str)
    {
    }
    /**
     * @deprecated Use Bitrix\StringHelper::snake2camel instead
     *
     * @param $str
     *
     * @return mixed
     */
    public static function snake2camel($str)
    {
    }
    public static function normalizeName($entityName)
    {
    }
    public function __clone()
    {
    }
    /**
     * @param Query $query
     * @param null  $entity_name
     *
     * @return Entity
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function getInstanceByQuery(\Bitrix\Main\ORM\Query\Query $query, &$entity_name = null)
    {
    }
    /**
     * @param string               $entityName
     * @param null|array[]|Field[] $fields
     * @param array                $parameters [namespace, table_name, uf_id, parent, parent_map, default_scope]
     *
     * @return Entity
     *
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function compileEntity($entityName, $fields = null, $parameters = array())
    {
    }
    /**
     * @return string[] Array of SQL queries
     * @throws Main\SystemException
     */
    public function compileDbTableStructureDump()
    {
    }
    /**
     * @param $dataClass
     *
     * @return EntityObject|string
     */
    public static function compileObjectClass($dataClass)
    {
    }
    /**
     * @param $dataClass
     *
     * @return Collection|string
     */
    public static function compileCollectionClass($dataClass)
    {
    }
    /**
     * Creates table according to Fields collection
     *
     * @return void
     * @throws Main\SystemException
     */
    public function createDbTable()
    {
    }
    /**
     * @param Entity|string $entity
     *
     * @return bool
     */
    public static function destroy($entity)
    {
    }
    /**
     * Reads data from cache.
     *
     * @param int    $ttl        TTL.
     * @param string $cacheId    The cache ID.
     * @param bool   $countTotal Whether to read total count from the cache.
     *
     * @return Main\DB\ArrayResult|null
     * @throws Main\SystemException
     */
    public function readFromCache($ttl, $cacheId, $countTotal = false)
    {
    }
    /**
     * @param Main\DB\Result $result     A query result to cache.
     * @param string         $cacheId    The cache ID.
     * @param bool           $countTotal Whether to write total count to the cache.
     *
     * @return Main\DB\ArrayResult
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function writeToCache(\Bitrix\Main\DB\Result $result, $cacheId, $countTotal = false)
    {
    }
    /**
     * Returns cache TTL for the entity, possibly limited by the .settings.php:
     * 'cache_flags' => array('value'=> array(
     *		"b_group_max_ttl" => 200,
     *		"b_group_min_ttl" => 100,
     * ))
     * Maximum is a higher-priority.
     * @param int $ttl Preferable TTL
     * @return int Calculated TTL
     */
    public function getCacheTtl($ttl)
    {
    }
    protected function getCacheDir()
    {
    }
    /**
     * Cleans all cache entries for the entity.
     *
     * @throws Main\SystemException
     */
    public function cleanCache()
    {
    }
    /**
     * Sets a flag indicating full text index support for a field.
     *
     * @deprecated Does nothing, mysql 5.6 has fulltext always enabled.
     * @param string $field
     * @param bool   $mode
     */
    public function enableFullTextIndex($field, $mode = true)
    {
    }
    /**
     * Returns true if full text index is enabled for a field.
     *
     * @deprecated Always returns true, mysql 5.6 has fulltext always enabled.
     * @param string $field
     * @return bool
     */
    public function fullTextIndexEnabled($field)
    {
    }
}