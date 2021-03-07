<?php

namespace Bitrix\Perfmon\Sql;

/**
 * Class BaseObject
 * Base class for all schema objects such as tables, columns, indexes, etc.
 * @package Bitrix\Perfmon\Sql
 */
abstract class BaseObject
{
    /** @var BaseObject|null */
    public $parent = null;
    public $name = '';
    public $body = '';
    protected $ciName = '';
    /**
     * @param string $name Name of the table.
     */
    function __construct($name = '')
    {
    }
    /**
     * Sets source code for object.
     *
     * @param string $body The body.
     *
     * @return BaseObject
     */
    public function setBody($body)
    {
    }
    /**
     * Sets parent for object.
     * <p>
     * For example Table for Column.
     *
     * @param BaseObject $parent Parent object.
     *
     * @return BaseObject
     */
    public function setParent(\Bitrix\Perfmon\Sql\BaseObject $parent = null)
    {
    }
    /**
     * Returns "unquoted" name of the object.
     *
     * @param array|string $name Name or array of names to unquote.
     *
     * @return array|string
     */
    public final function getUnquotedName($name = null)
    {
    }
    /**
     * Returns "lowercased" name of the object.
     * <p>
     * If name is not quoted then it made lowercase.
     *
     * @return string
     */
    public final function getLowercasedName()
    {
    }
    /**
     * Returns "normalized" name of the table.
     * <p>
     * If name is not quoted then it made uppercase.
     *
     * @param string $name Table name.
     * @return string
     */
    public static final function getCompareName($name)
    {
    }
    /**
     * Compares name of the table with given.
     * <p>
     * If name has no quotes when comparison is case insensitive.
     *
     * @param string $name Table name to compare.
     * @return int
     * @see strcmp
     */
    public final function compareName($name)
    {
    }
    /**
     * Return DDL or commentary for object creation.
     *
     * @param string $dbType Database type.
     *
     * @return array|string
     */
    public function getCreateDdl($dbType = '')
    {
    }
    /**
     * Return DDL or commentary for object destruction.
     *
     * @param string $dbType Database type.
     *
     * @return array|string
     */
    public function getDropDdl($dbType = '')
    {
    }
    /**
     * Return DDL or commentary for object modification.
     *
     * @param BaseObject $target Target object.
     * @param string $dbType Database type.
     *
     * @return array|string
     */
    public function getModifyDdl(\Bitrix\Perfmon\Sql\BaseObject $target, $dbType = '')
    {
    }
}