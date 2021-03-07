<?php

namespace Bitrix\Iblock\InheritedProperty;

class ValuesQueue
{
    /** var array[intger][integer]false|array */
    protected $db_values = array();
    /** @var array[string]ValuesQueue */
    protected static $queues = array();
    /**
     * Returns a queue instance by the key provided.
     * Creates new instance if first time called for the given key.
     *
     * @param string $key Queue identifier.
     *
     * @return ValuesQueue
     */
    public static function getInstance($key)
    {
    }
    /**
     * Clears all the queues.
     *
     * @return void
     */
    public static function deleteAll()
    {
    }
    /**
     * Returns the queue elements for the given iblock
     * which were not queried from the database.
     *
     * @param integer $iblockId Iblock identifier.
     *
     * @return array[integer]integer
     */
    public function get($iblockId)
    {
    }
    /**
     * Stores the values for queue elements for future reference.
     * Missing elements are assigned empty arrays.
     *
     * @param integer $iblockId Iblock identifier.
     * @param array[integer]array $values Values from the database.
     *
     * @return void
     */
    public function set($iblockId, $values)
    {
    }
    /**
     * Puts an element into the queue.
     *
     * @param integer $iblockId Iblock identifier.
     * @param integer $id Element identifier.
     *
     * @return void
     */
    public function addElement($iblockId, $id)
    {
    }
    /**
     * Removes an element from the queue.
     *
     * @param integer $iblockId Iblock identifier.
     * @param integer $id Element identifier.
     *
     * @return void
     */
    public function deleteElement($iblockId, $id)
    {
    }
    /**
     * Returns data of the element from the queue.
     * False when element was not queried from the database.
     * And null when element was not queued.
     *
     * @param integer $iblockId Iblock identifier.
     * @param integer $id Element identifier.
     *
     * @return false|null|array
     */
    public function getElement($iblockId, $id)
    {
    }
    /**
     * Stores the data for the element in the queue.
     * Rewrites any existing value.
     *
     * @param integer $iblockId Iblock identifier.
     * @param integer $id Element identifier.
     * @param array   $value A Value to be stored.
     *
     * @return void
     */
    public function setElement($iblockId, $id, $value)
    {
    }
}