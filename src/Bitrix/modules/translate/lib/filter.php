<?php

namespace Bitrix\Translate;

/**
 * Filter.
 *
 * @property string|string[] $langId Language code.
 * @property int $pathId Path index Id.
 * @property int $nextPathId Path index Id.
 * @property int $nextLangPathId Lang path Id.
 * @property int $fileId File Id.
 * @property int $nextFileId File Id.
 * @property string $path File stricture path.
 * @property int $tabId Storage Id.
 *
 */
class Filter implements \Iterator, \Countable, \Serializable, \ArrayAccess
{
    const STORAGE_NAME = 'TRANSLATE_FILTER';
    const STORAGE_TAB_CNT = 'TRANSLATE_FILTER_TAB';
    /** @var array */
    private $params = array();
    /** @var array */
    private $iterateCodes = array();
    /** @var int */
    private $iteratePosition;
    /**
     * Constructs filter object.
     *
     * @param array|int $param Init params.
     */
    public function __construct($param = null)
    {
    }
    //region getter/setter
    /**
     * Checks existence of the parameter by its code.
     *
     * @param string $code Parameter code.
     *
     * @return boolean
     */
    public function __isset($code)
    {
    }
    /**
     * Returns parameter by its code.
     *
     * @param string $code Parameter code.
     *
     * @return string|mixed|null
     */
    public function __get($code)
    {
    }
    /**
     * Add parameter to collection.
     *
     * @param string $code Parameter code.
     * @param string|mixed $value Parameter value.
     *
     * @return void
     */
    public function __set($code, $value)
    {
    }
    /**
     * Unset parameter by its code.
     *
     * @param string $code Parameter code.
     *
     * @return void
     */
    public function __unset($code)
    {
    }
    //endregion
    //region Iterator
    /**
     * Return the current phrase element.
     *
     * @return string|null
     */
    public function current()
    {
    }
    /**
     * Move forward to next phrase element.
     *
     * @return void
     */
    public function next()
    {
    }
    /**
     * Return the key of the current phrase element.
     *
     * @return int|null
     */
    public function key()
    {
    }
    /**
     * Checks if current position is valid.
     *
     * @return boolean
     */
    public function valid()
    {
    }
    /**
     * Rewind the Iterator to the first element.
     *
     * @return void
     */
    public function rewind()
    {
    }
    //endregion
    // region Serializable
    /**
     * String representation of object.
     * @return string
     */
    public function serialize()
    {
    }
    /**
     * Constructs the object from a string representation.
     * @param string $data Data to deserialize.
     */
    public function unserialize($data)
    {
    }
    //endregion
    // region Storage
    /**
     * Returns storage tab Id.
     * @param bool $increment Generate new id.
     * @return int
     */
    public static function getTabId($increment = true)
    {
    }
    /**
     * Stories the object into storage.
     * @return void
     */
    public function store()
    {
    }
    /**
     * Reconstructs the object from storage.
     * @param int $id In of the saved date in storage.
     */
    public function restore($id)
    {
    }
    // endregion
    //region ArrayAccess
    /**
     * Checks existence of the param by its code.
     *
     * @param string $code Phrase code.
     *
     * @return boolean
     */
    public function offsetExists($code)
    {
    }
    /**
     * Returns param by its code.
     *
     * @param string $code Param code.
     *
     * @return mixed|null
     */
    public function offsetGet($code)
    {
    }
    /**
     * Offset to set.
     *
     * @param string $code Param code.
     * @param mixed $param Param value.
     *
     * @return void
     */
    public function offsetSet($code, $param)
    {
    }
    /**
     * Unset param value by code.
     *
     * @param string $code Param code.
     *
     * @return void
     */
    public function offsetUnset($code)
    {
    }
    // endregion
    //region Countable
    /**
     * Returns amount params in the filter now.
     *
     * @return int
     */
    public function count()
    {
    }
    //endregion
}