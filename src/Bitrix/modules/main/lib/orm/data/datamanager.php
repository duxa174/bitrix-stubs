<?php

namespace Bitrix\Main\ORM\Data;

/**
 * Base entity data manager
 */
abstract class DataManager
{
    const EVENT_ON_BEFORE_ADD = "OnBeforeAdd";
    const EVENT_ON_ADD = "OnAdd";
    const EVENT_ON_AFTER_ADD = "OnAfterAdd";
    const EVENT_ON_BEFORE_UPDATE = "OnBeforeUpdate";
    const EVENT_ON_UPDATE = "OnUpdate";
    const EVENT_ON_AFTER_UPDATE = "OnAfterUpdate";
    const EVENT_ON_BEFORE_DELETE = "OnBeforeDelete";
    const EVENT_ON_DELETE = "OnDelete";
    const EVENT_ON_AFTER_DELETE = "OnAfterDelete";
    /** @var Entity[] */
    protected static $entity;
    /** @var EntityObject[] Cache of class names */
    protected static $objectClass;
    /** @var Collection[] Cache of class names */
    protected static $collectionClass;
    /** @var array Restricted words for object class name */
    protected static $reservedWords = [
        // keywords
        'abstract',
        'and',
        'array',
        'as',
        'break',
        'callable',
        'case',
        'catch',
        'class',
        'clone',
        'const',
        'continue',
        'declare',
        'default',
        'die',
        'do',
        'echo',
        'else',
        'elseif',
        'empty',
        'enddeclare',
        'endfor',
        'endforeach',
        'endif',
        'endswitch',
        'endwhile',
        'eval',
        'exit',
        'extends',
        'final',
        'finally',
        'for',
        'foreach',
        'function',
        'global',
        'goto',
        'if',
        'implements',
        'include',
        'include_once',
        'instanceof',
        'insteadof',
        'interface',
        'isset',
        'list',
        'namespace',
        'new',
        'or',
        'print',
        'private',
        'protected',
        'public',
        'require',
        'require_once',
        'return',
        'static',
        'switch',
        'throw',
        'trait',
        'try',
        'unset',
        'use',
        'var',
        'while',
        'xor',
        'yield',
        // classes
        'self',
        'parent',
        // others
        'int',
        'float',
        'bool',
        'string',
        'true',
        'false',
        'null',
        'void',
        'iterable',
        'object',
        'resource',
        'mixed',
        'numeric',
    ];
    /**
     * Returns entity object
     *
     * @return Entity
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function getEntity()
    {
    }
    public static function unsetEntity($class)
    {
    }
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns connection name for entity
     *
     * @return string
     */
    public static function getConnectionName()
    {
    }
    /**
     * @return string
     */
    public static function getTitle()
    {
    }
    /**
     * Returns class of Object for current entity.
     *
     * @return string|EntityObject
     */
    public static function getObjectClass()
    {
    }
    /**
     * Returns class name (without namespace) of Object for current entity.
     *
     * @return string
     */
    public static final function getObjectClassName()
    {
    }
    protected static function getObjectClassByDataClass($dataClass)
    {
    }
    /**
     * Returns class of Object collection for current entity.
     *
     * @return string|Collection
     */
    public static function getCollectionClass()
    {
    }
    /**
     * Returns class name (without namespace) of Object collection for current entity.
     *
     * @return string
     */
    public static final function getCollectionClassName()
    {
    }
    protected static function getCollectionClassByDataClass($dataClass)
    {
    }
    /**
     * @return EntityObject|string
     */
    public static function getObjectParentClass()
    {
    }
    /**
     * @return Collection|string
     */
    public static function getCollectionParentClass()
    {
    }
    /**
     * @return Query|string
     */
    public static function getQueryClass()
    {
    }
    /**
     * @return Entity|string
     */
    public static function getEntityClass()
    {
    }
    /**
     * @param bool $setDefaultValues
     *
     * @return null Actual type should be annotated by orm:annotate
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static final function createObject($setDefaultValues = true)
    {
    }
    /**
     * @return null Actual type should be annotated by orm:annotate
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static final function createCollection()
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
    public static final function wakeUpObject($row)
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
    public static final function wakeUpCollection($rows)
    {
    }
    /**
     * Returns entity map definition.
     * To get initialized fields @see \Bitrix\Main\ORM\Entity::getFields() and \Bitrix\Main\ORM\Entity::getField()
     */
    public static function getMap()
    {
    }
    public static function getUfId()
    {
    }
    public static function isUts()
    {
    }
    public static function isUtm()
    {
    }
    /**
     * @param Query $query
     *
     * @return Query
     */
    public static function setDefaultScope($query)
    {
    }
    /**
     * @param Entity $entity
     *
     * @return null
     */
    public static function postInitialize(\Bitrix\Main\ORM\Entity $entity)
    {
    }
    /**
     * Returns selection by entity's primary key and optional parameters for getList()
     *
     * @param mixed $primary    Primary key of the entity
     * @param array $parameters Additional parameters for getList()
     *
     * @return QueryResult
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getByPrimary($primary, array $parameters = array())
    {
    }
    /**
     * Returns selection by entity's primary key
     *
     * @param mixed $id Primary key of the entity
     *
     * @return QueryResult
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getById($id)
    {
    }
    /**
     * Returns one row (or null) by entity's primary key
     *
     * @param mixed $id Primary key of the entity
     *
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getRowById($id)
    {
    }
    /**
     * Returns one row (or null) by parameters for getList()
     *
     * @param array $parameters Primary key of the entity
     *
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getRow(array $parameters)
    {
    }
    /**
     * Executes the query and returns selection by parameters of the query. This function is an alias to the Query object functions
     *
     * @param array $parameters An array of query parameters, available keys are:<br>
     * 		"select" => array of fields in the SELECT part of the query, aliases are possible in the form of "alias"=>"field";<br>
     * 		"filter" => array of filters in the WHERE/HAVING part of the query in the form of "(condition)field"=>"value";
     * 			also could be an instance of Filter;<br>
     * 		"group" => array of fields in the GROUP BY part of the query;<br>
     * 		"order" => array of fields in the ORDER BY part of the query in the form of "field"=>"asc|desc";<br>
     * 		"limit" => integer indicating maximum number of rows in the selection (like LIMIT n in MySql);<br>
     * 		"offset" => integer indicating first row number in the selection (like LIMIT n, 100 in MySql);<br>
     *		"runtime" => array of entity fields created dynamically;<br>
     * 		"cache => array of cache options:<br>
     * 			"ttl" => integer indicating cache TTL;<br>
     * 			"cache_joins" => boolean enabling to cache joins, false by default.
     * @see Query::filter()
     *
     * @return QueryResult
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * Performs COUNT query on entity and returns the result.
     *
     * @param array|Filter $filter
     * @param array $cache An array of cache options
     * 		"ttl" => integer indicating cache TTL
     * @return int
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getCount($filter = array(), array $cache = array())
    {
    }
    /**
     * Creates and returns the Query object for the entity
     *
     * @return Query
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function query()
    {
    }
    /**
     * @param array $data
     *
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected static function replaceFieldName($data = array())
    {
    }
    /**
     * @param       $primary
     * @param array $data
     *
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected static function normalizePrimary(&$primary, $data = array())
    {
    }
    /**
     * @param $primary
     *
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected static function validatePrimary($primary)
    {
    }
    /**
     * Checks the data fields before saving to DB. Result stores in the $result object
     *
     * @param Result $result
     * @param mixed  $primary
     * @param array  $data
     *
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function checkFields(\Bitrix\Main\ORM\Data\Result $result, $primary, array $data)
    {
    }
    /**
     * @param array $fields
     * @param bool  $setDefaultValues
     * @param array $primary
     *
     * @return EntityObject
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected static function convertArrayToObject(&$fields, $setDefaultValues = false, $primary = null)
    {
    }
    /**
     * @param EntityObject                 $object
     * @param                              $ufdata
     * @param \Bitrix\Main\ORM\Data\Result $result
     */
    protected static function checkUfFields($object, $ufdata, $result)
    {
    }
    /**
     * Adds row to entity table
     *
     * @param array $data An array with fields like
     * 	array(
     * 		"fields" => array(
     * 			"FIELD1" => "value1",
     * 			"FIELD2" => "value2",
     * 		),
     * 		"auth_context" => \Bitrix\Main\Authentication\Context object
     *	)
     *	or just a plain array of fields.
     *
     * @return AddResult Contains ID of inserted row
     *
     * @throws \Exception
     */
    public static function add(array $data)
    {
    }
    /**
     * @param      $rows
     * @param bool $ignoreEvents
     *
     * @return AddResult
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function addMulti($rows, $ignoreEvents = false)
    {
    }
    /**
     * Updates row in entity table by primary key
     *
     * @param mixed $primary
     * @param array $data An array with fields like
     * 	array(
     * 		"fields" => array(
     * 			"FIELD1" => "value1",
     * 			"FIELD2" => "value2",
     * 		),
     * 		"auth_context" => \Bitrix\Main\Authentication\Context object
     *	)
     *	or just a plain array of fields.
     *
     * @return UpdateResult
     *
     * @throws \Exception
     */
    public static function update($primary, array $data)
    {
    }
    /**
     * @param array $primaries
     * @param array $data
     * @param bool  $ignoreEvents
     *
     * @return UpdateResult
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function updateMulti($primaries, $data, $ignoreEvents = false)
    {
    }
    /**
     * Deletes row in entity table by primary key
     *
     * @param mixed $primary
     *
     * @return DeleteResult
     *
     * @throws \Exception
     */
    public static function delete($primary)
    {
    }
    /**
     * @param EntityObject $object
     * @param              $fields
     * @param              $result
     */
    protected static function callOnBeforeAddEvent($object, $fields, $result)
    {
    }
    /**
     * @param $object
     * @param $fields
     * @param $ufdata
     */
    protected static function callOnAddEvent($object, $fields, $ufdata)
    {
    }
    /**
     * @param EntityObject $object
     * @param array        $fields
     * @param int          $id
     */
    protected static function callOnAfterAddEvent($object, $fields, $id)
    {
    }
    /**
     * @param EntityObject $object
     * @param              $fields
     * @param              $result
     */
    protected static function callOnBeforeUpdateEvent($object, $fields, $result)
    {
    }
    /**
     * @param EntityObject $object
     * @param              $fields
     * @param              $ufdata
     */
    protected static function callOnUpdateEvent($object, $fields, $ufdata)
    {
    }
    /**
     * @param EntityObject $object
     * @param              $fields
     */
    protected static function callOnAfterUpdateEvent($object, $fields)
    {
    }
    /**
     * @param $primary
     * @param $entity
     * @param $result
     */
    protected static function callOnBeforeDeleteEvent($primary, $entity, $result)
    {
    }
    /**
     * @param $primary
     * @param $entity
     */
    protected static function callOnDeleteEvent($primary, $entity)
    {
    }
    /**
     * @param $primary
     * @param $entity
     */
    protected static function callOnAfterDeleteEvent($primary, $entity)
    {
    }
    /**
     * Sets a flag indicating crypto support for a field.
     *
     * @param string $field
     * @param string $table
     * @param bool   $mode
     *
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function enableCrypto($field, $table = null, $mode = true)
    {
    }
    /**
     * Returns true if crypto is enabled for a field.
     *
     * @param string $field
     * @param string $table
     *
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function cryptoEnabled($field, $table = null)
    {
    }
    /*
    An inheritor class can define the event handlers for own events.
    Why? To prevent from rewriting the add/update/delete functions.
    These handlers are triggered in the Bitrix\Main\ORM\Event::send() function
    */
    public static function onBeforeAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onAfterAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onBeforeUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onAfterUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onBeforeDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onAfterDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
}