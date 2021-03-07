<?php

namespace Bitrix\Perfmon\Sql;

/**
 * Class Collection
 * This class represents collection of database objects such as table columns or indexes, schema procedures or sequences.
 * @package Bitrix\Perfmon\Sql
 */
class Collection
{
    /** @var array[BaseObject]  */
    private $list = array();
    /**
     * Add object into the tail of the collection.
     *
     * @param BaseObject $object Object to add.
     *
     * @return void
     */
    public function add(\Bitrix\Perfmon\Sql\BaseObject $object)
    {
    }
    /**
     * Searches collection for an object by it's name.
     *
     * @param string $name Object name to look up.
     *
     * @return BaseObject|null
     */
    public function search($name)
    {
    }
    /**
     * Returns all collection objects.
     *
     * @return array[BaseObject]
     */
    public function getList()
    {
    }
    /**
     * Compares two collections of objects and returns array of pairs.
     * <p>
     * Pair is the two element array:
     * - First element with index "0" is the object from the source collection.
     * - Second element with index "1" is the object from $targetList.
     * - if pair element is null when no such element found (by name) in the collection.
     *
     * @param Collection $targetList Collection to compare.
     * @param bool $compareBody Whenever to compare objects bodies or not.
     *
     * @return array
     */
    public function compare(\Bitrix\Perfmon\Sql\Collection $targetList, $compareBody = true)
    {
    }
}