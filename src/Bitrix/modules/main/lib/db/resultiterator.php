<?php

namespace Bitrix\Main\DB;

class ResultIterator implements \Iterator
{
    /** @var Result */
    private $result;
    /** @var int */
    private $counter;
    private $currentData;
    /**
     * ResultIterator constructor.
     *
     * @param Result $result
     */
    public function __construct(\Bitrix\Main\DB\Result $result)
    {
    }
    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
    }
    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
    }
    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
    }
    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
    }
    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @throws NotSupportedException
     * @since 5.0.0
     */
    public function rewind()
    {
    }
}